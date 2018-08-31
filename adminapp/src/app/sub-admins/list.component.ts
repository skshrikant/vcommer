import {Component, OnInit} from '@angular/core';
import {SubAdminService} from "./sub-admin.service";
import {SubAdmin} from "./models/sub-admin";
import {Subscription} from "rxjs";
import {FormBuilder, FormGroup, Validators} from "@angular/forms";
import {Router, ActivatedRoute} from "@angular/router";

@Component({
    selector: 'trd-list',
    templateUrl: './list.component.html',
    styles: []
})
export class ListComponent implements OnInit {
    public subAdminList: SubAdmin[];
    private subscription: Subscription;
    public editEnabled;
    public enableEditButtons: boolean;
    public enableOtherButtons: boolean;
    public selectedAdminEdit;
    public editAdminForm: FormGroup;
    public submitted: boolean;
    private serverErrors = {};
    private selectedPermissionEdit;
    private showPermissionForm;

    constructor(private subAdminService: SubAdminService, private route: ActivatedRoute,
                private formBuilder: FormBuilder, private router: Router) {
    }

    ngOnInit() {
        this.subAdminService.getSubAdmins();
        this.subscription = this.subAdminService.subAdminChanged
            .subscribe((adminList: SubAdmin[])=> {
                this.subAdminList = adminList;
                this.subAdminList.map((admin)=> {
                    admin.selected = admin.selected ? true : !1;
                });
            })
    }

    openEditable() {
        this.selectedAdminEdit = this.subAdminList.filter((admin: SubAdmin)=> {
            return admin.selected;
        })[0];
        this.editEnabled = true;
        this.initEditForm();
    }

    redirectToPermssion() {
        this.selectedPermissionEdit = this.subAdminList.filter((admin: SubAdmin)=> {
            return admin.selected;
        })[0];
        this.initPermissionForm();
    }

    private initEditForm() {
        this.editAdminForm = this.formBuilder.group({
            'id': this.selectedAdminEdit.id,
            'username': [this.selectedAdminEdit.username, Validators.required],
            'security_code': [this.selectedAdminEdit.security_code, Validators.required],
            'password': [this.selectedAdminEdit.password, Validators.required],
            'email': [this.selectedAdminEdit.email, [Validators.required, Validators.email]],
            'profile_image': this.selectedAdminEdit.profile_image,
            'online_status': this.selectedAdminEdit.online_status,
            'is_suspended': this.selectedAdminEdit.is_suspended,
            'is_deleted': this.selectedAdminEdit.is_deleted
        });
    }

    editAdmin(adminIndex: number) {
        this.submitted = true;
        this.serverErrors = {};
        if (this.editAdminForm.valid) {
            this.subAdminService.updateSubAdmin(this.editAdminForm.value)
                .subscribe((admin: SubAdmin)=> {
                    this.subAdminService.updateLocalAdmin(adminIndex, admin);
                    this.submitted = false;
                    this.selectedAdminEdit = {};
                    this.toggleActionButtons();
                }, error => {
                    if (error.status === 422) {
                        this.serverErrors = error.error;
                    }
                });
        }
    }

    resetAdminForm() {
        this.editAdminForm.reset(this.selectedAdminEdit);
    }

    closeEdit() {
        this.selectedAdminEdit = {};
        this.editEnabled = false;
    }

    toggleActionButtons() {
        const selected = this.subAdminList.filter((admin: SubAdmin)=> {
            return admin.selected;
        }).length;
        this.enableEditButtons = false;
        this.enableOtherButtons = false;
        this.editEnabled = false;
        setTimeout(()=> {
            this.enableEditButtons = selected === 1;
            this.enableOtherButtons = selected >= 1;
        }, 50)
    }

    private initPermissionForm() {
        this.showPermissionForm = true;
    }

    togglePermissionEdit(showValue: boolean) {
        this.showPermissionForm = showValue;
    }

    deleteAdmins(suspend: boolean = false) {
        const selectedAdmins = []
        this.subAdminList.forEach((admin: SubAdmin)=> {
            if (admin.selected) {
                return selectedAdmins.push(admin['id']);
            }
        });
        // this.subAdminService.deleteLocal(selectedAdmins);
        let serviceOption = (suspend) ? this.subAdminService.suspend(selectedAdmins) : this.subAdminService.delete(selectedAdmins);
        serviceOption.subscribe(deleteStatus=> {
            if (deleteStatus) {
                this.subAdminService.deleteLocal(selectedAdmins);
                this.toggleActionButtons();
            }
        })
    }

    search(searchValue){
        this.subAdminService.filterAdmin(searchValue);
    }
}
