import { Component, OnInit } from '@angular/core';
import { AuthService } from './core/auth.service';
import { Subscription } from 'rxjs/Subscription';

@Component({
  selector: 'trd-main-route',
  template: `
    <router-outlet></router-outlet>
    <nav class="navbar admin-nav navbar-fixed-top" *ngIf="loggedInUser">
    <div class="container">
      <ul class="nav navbar-right navbar-nav">
        <li class="dropdown" trdDropdown>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="images/rseller2.png" style="width:35px;"> {{loggedInUser?.username}}</a>
          <ul class="dropdown-menu">
            <li><a >Edit</a></li>
            <li><a (click)="logout()">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    </nav>
    <nav class="navbar navbar-fixed-bottom footerNav-div" *ngIf="loggedInUser">
    <div class="container">
      <nav class="navbar  footer-nav">
        <div class="navbar-header"> 
        <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" 
        data-target="#bs-example-navbar-collapse-1" aria-expanded="false" 
        style="padding: 0px; margin: 4px 0px;"><img src="images/5-128.png" width="40px"></a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="#"> <img src="images/videosok.png" style="height:40px;"><br>
              Monitor </a> </li>
            <li> <a [routerLink]="['sub-admins']"> <img src="images/user-new-3.png" style="height:40px;"><br>
              Sub Admins </a> </li>
            <li> <a [routerLink]="['members']"> <img src="images/img2539.png" style="height:40px;"><br>
              Member Info </a> </li>
            <li> <a [routerLink]="['audit']"> <img src="images/trusted.png" style="height:40px;"><br>
              Audit </a> </li>
            <li> <a [routerLink]="['ad-management']"> <img src="images/advertising1.png" style="height:40px;"><br>
              Carousels </a> </li>
            <li> <a [routerLink]="['chat']"> <img src="images/support.png" style="height:40px;"><br> Support </a> </li>
            <li> <a [routerLink]="['newsletters']"> <img src="images/NewsWeather.png" style="height:40px;"><br> Newsletter </a> </li>
            <li> <a href="#"> <img src="images/battery-charging.png" style="height:40px;"><br>  Statistics </a> </li>
            <li> <a href="#"> <img src="images/battery-caution-2.png" style="height:40px;"><br>  Errors </a> </li>
            <li> <a href="#"> <img src="images/exit.png" style="height:40px;"><br> Logout </a> </li>
            <li> <a [routerLink]="['account-alarm']"> <img src="images/Alerts2.png" style="height:40px;"><br> Accounts Alarm </a> </li>
          </ul>
        </div>
      </nav>

  `,
  styles: []
})
export class MainRouteComponent implements OnInit {
  loggedInUser: any;
  sub: Subscription;

  constructor(private authService:AuthService) { }

  ngOnInit() {
    this.sub = this.authService.getLoggedInUser()
    .subscribe((loggedInUser)=> this.loggedInUser = loggedInUser)
  }
  logout(){
    this.authService.logout();
  }
}
