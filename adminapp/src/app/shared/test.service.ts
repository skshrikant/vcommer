import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../environments/environment';

@Injectable()
export class TestService {

  private appUrl = environment.backend; 
  constructor(private http:HttpClient) { }

  testApi(){
    console.log(`${this.appUrl}auth`);
    return this.http.get(`${this.appUrl}auth`)
  }

}
