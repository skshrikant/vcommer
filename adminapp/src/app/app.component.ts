import { Component } from '@angular/core';
import { TestService } from './shared/test.service';
import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';
import { AuthService } from './core/auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'trd-root',
  template: `
    <!--The content below is only a placeholder and can be replaced.-->
    
   <router-outlet></router-outlet>
  `,
  styles: []
})
export class AppComponent implements OnInit {
  title = 'trd';
  constructor(private authService: AuthService, private router: Router) { }

  ngOnInit() {

    this.authService.getLoggedInUser().subscribe((res) => {
      if (res['error'] == 'Unauthorized') {
        this.router.navigate(['login'])
      }
    },
      err => {
        if (err['status'] == 401) {
          this.router.navigate(['login'])
        }
      });
  }
}
