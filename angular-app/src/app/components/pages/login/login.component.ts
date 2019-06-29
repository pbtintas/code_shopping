import {Component, OnInit} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Route, Router, RouterModule} from "@angular/router";


@Component({
  selector: 'login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  credentials = {
    // email: '',
    // password: ''
    email: 'admin@user.com',
    password: 'secret'
  };

  constructor(private http: HttpClient, private router: Router) {
  }

  ngOnInit() {

  }

  submit() {
    this.http.post<any>('http://localhost:8000/api/login', this.credentials)
      .subscribe((data) => {
        this.router.navigate(['categories/list']);
        let token = data.token;
        window.localStorage.setItem('token',token)

      });
    return false;
  }
}
