import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MainRouteComponent } from './main-route.component';

const routes: Routes = [
  {path:'login',loadChildren:'app/login/login.module#LoginModule'},  
  {path:'',component:MainRouteComponent,children:[
    {path:'sub-admins',loadChildren:'app/sub-admins/sub-admins.module#SubAdminsModule'}]}
];

@NgModule({
  imports: [RouterModule.forRoot(routes, {useHash:true , enableTracing:true})],
  exports: [RouterModule]
})
export class AppRoutingModule { }