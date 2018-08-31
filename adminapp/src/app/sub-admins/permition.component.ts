import {Component, OnInit, Input, Output, EventEmitter} from '@angular/core';
import {SubAdminService} from "./sub-admin.service";
import {ActivatedRoute, Router} from "@angular/router";
import {Subscription} from "rxjs";
import {FormBuilder, FormGroup, FormControl, Validators} from "@angular/forms";
import {PermissionsArray, Permissions} from "./models/sub-admin";

@Component({
  selector: 'trd-permition',
  templateUrl: './permition.component.html',
  styles: []
})
export class PermitionComponent implements OnInit {

    @Input()
    selectedEditAdmin;
    @Input()
    selectedIndex;
    @Output()
    toggleEdit: EventEmitter<boolean> = new EventEmitter<boolean>();
    public permissionForm: FormGroup;
    private permissionKeys;
    private permitions:Permissions;
    private subscriber;

    constructor(private subAdminService: SubAdminService,
                private route: ActivatedRoute, private router: Router,
                private formBuilder: FormBuilder) {
    }

    ngOnInit() {
        // this.routeSub = this.route.params.subscribe(params =>{
        //   this.selectedId = params['id'];
        //   this.selectedEditAdmin = this.subAdminService.getAdminById(this.selectedId);
        //   console.log(this.selectedEditAdmin);
        //   this.initForm();
        // })
        this.subscriber = this.subAdminService.getAdminPermission(this.selectedEditAdmin.id).
            subscribe((permissions:Permissions)=>{
            this.permitions = permissions;
            this.initForm();
        });
    }

    private initForm() {
        this.permissionForm = this.formBuilder.group({
            'admin_user_id': [this.selectedEditAdmin.id, Validators.required]
        });

        this.permissionKeys = PermissionsArray;

        // const permissionKeys = Object.keys(permissions);
        this.permissionKeys.forEach(permit => {
            let control: FormControl = new FormControl(this.permitions?this.permitions[permit.value] =='1'?true:false:false);
            this.permissionForm.addControl(permit.value, control);
        });
    }

    onSubmit(form: FormGroup) {
        if (form.valid) {
            this.subAdminService.updateAdminPermission(form.value)
                .subscribe((updatedUser:any)=>{
                    this.subAdminService.updateLocalAdmin(this.subAdminService.getIndexOfAdmin(updatedUser),updatedUser)
                    this.toggleEdit.emit(false);
                }, error => {
                    alert(error);
                })
        }
    }
}
