import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment';
import { Router } from '@angular/router';

@Injectable()
export class AuthService {

  private apiUrl = environment.backend;
  public authUser = {};
  constructor(private http:HttpClient, private router:Router) { }

  authenticate(user){
    let userData = new FormData();
    if(user){
      const userKeys = Object.keys(user);
      userKeys.forEach((key) => {
        userData.append(key,user[key]);
      });
    }

    return this.http.post(`${this.apiUrl}auth`,userData);
  }

  getLoggedInUser(){
    return this.http.get(`${this.apiUrl}current-user`);
  }

  logout(){
    return this.http.get(`${this.apiUrl}logout`).subscribe((status)=> {
this.router.navigate(['login']);
    });
  }

}
