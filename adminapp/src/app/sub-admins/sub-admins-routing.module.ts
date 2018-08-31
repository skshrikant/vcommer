import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { Component } from '@angular/core/src/metadata/directives';
import { IndexComponent } from './index.component';
import { ListComponent } from './list.component';
import { SuspendedListComponent } from './suspended-list.component';
import { AddComponent } from './add.component';
import { PermitionComponent } from './permition.component';

const routes: Routes = [
  {
    path: '',
    component: IndexComponent,
    children: [{
      path: '', component: ListComponent,
      children: [
        {
          path: 'add', component: AddComponent
        },
        {
          path: 'permisions/:id', component: PermitionComponent
        }],
    },
    {
      path: 'suspended-list', component: SuspendedListComponent
    }]
  }
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class SubAdminsRoutingModule { }
