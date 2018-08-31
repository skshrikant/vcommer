import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SubAdminsRoutingModule } from './sub-admins-routing.module';
import { IndexComponent } from './index.component';
import { ListComponent } from './list.component';
import { AddComponent } from './add.component';
import { SuspendedListComponent } from './suspended-list.component';
import { PermitionComponent } from './permition.component';
import { HeaderComponent } from './header.component';
import { ModalModule } from 'ngx-bootstrap/modal';
import { SubAdminService } from './sub-admin.service';
import {ReactiveFormsModule, FormsModule} from '@angular/forms';
import { CustomFormsModule } from '@floydspace/ngx-validation';
import { SharedModule } from '../shared/shared.module';
import { FileUploadModule } from 'ng2-file-upload';
import { SweetAlert2Module } from '@toverux/ngx-sweetalert2';


@NgModule({
  imports: [
    CommonModule,
    SubAdminsRoutingModule,
      FormsModule,
    ReactiveFormsModule,
    SharedModule,
    ModalModule.forRoot(),
    CustomFormsModule,
    FileUploadModule,
      SweetAlert2Module
  ],
  declarations: [IndexComponent, 
    ListComponent, AddComponent,
     SuspendedListComponent, PermitionComponent,
      HeaderComponent],
      providers: [SubAdminService]
})
export class SubAdminsModule { }
