import { Component, OnInit } from '@angular/core';
import { SubAdminService } from './sub-admin.service';
import { Router } from '@angular/router';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';
import { SubAdmin, Permissions, PermissionsArray } from './models/sub-admin'
import { FormArray } from '@angular/forms/src/model';
import { CustomValidators } from '@floydspace/ngx-validation';
import { FileUploader } from 'ng2-file-upload';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';

@Component({
  selector: 'trd-add',
  templateUrl: './add.component.html',
  styles: []
})
export class AddComponent implements OnInit {
  serverErrors: any;
  imageToShow: SafeResourceUrl;
  profileImg: { filename: any; filetype: any; value: any; };
  public uploader: FileUploader;

  showForm: boolean = false;
  submitted: boolean = false;
  adminForm: FormGroup;
  permissionKeys:Array<any>;

  constructor(private subAdminService: SubAdminService,
              private router: Router, private formBuilder: FormBuilder,
              public _sanitizer: DomSanitizer) {
  }

  ngOnInit() {
    this.uploader = new FileUploader({});
    this.initForm();
  }

  initForm(): any {
    let adminUser = new SubAdmin();
    let permissions = new Permissions();
    adminUser.permissions = permissions;
    const permissionGroup: FormGroup = this.getPermissionGorup(adminUser.permissions);

    this.adminForm = this.formBuilder.group({
      'id': adminUser.id,
      'username': [adminUser.username, Validators.required],
      'security_code': [adminUser.security_code, Validators.required],
      'password': [adminUser.password, Validators.required],
      'email': [adminUser.email, [Validators.required, Validators.email]],
      'profile_image': adminUser.profile_image,
      'online_status': adminUser.online_status,
      'is_suspended': adminUser.is_suspended,
      'is_deleted': adminUser.is_deleted,
      'permissions': permissionGroup
    });
  }

  getPermissionGorup(permissions: Permissions): FormGroup {
    let permissionGroup: FormGroup = this.formBuilder.group({});

    this.permissionKeys = PermissionsArray;

    // const permissionKeys = Object.keys(permissions);
    this.permissionKeys.forEach(permit => {
      let control: FormControl = new FormControl(permissions[permit.value]);
      permissionGroup.addControl(permit.value, control);
    });
    return permissionGroup;
  }

  onFileChange(event) {
    let reader = new FileReader();
    if (event.target.files && event.target.files.length > 0) {
      let file = event.target.files[0];
      this.adminForm.get('profile_image').setValue(file);
      reader.readAsDataURL(file);
      reader.onload = () => {
        this.profileImg = {
          filename: file.name,
          filetype: file.type,
          value: reader.result.split(',')[1]
        };

        this.imageToShow = this._sanitizer.bypassSecurityTrustResourceUrl(`data:${this.profileImg.filetype};base64, ${this.profileImg.value}`)
      }
    }
  }

  onSubmit(adminForm: FormGroup) {
    this.serverErrors = {};
    this.submitted = true;
    if (adminForm.valid) {
      const adminValues = adminForm.value;
      this.subAdminService.addSubAdmin(adminValues).subscribe((res: SubAdmin)=> {
        this.subAdminService.addLocalAdmin(res);
        this.submitted = false;
          this.router.navigate(['../']);
      }, error => {
        if (error.status === 422) {
          this.serverErrors = error.error;
        }
      });
    }

  }
}
