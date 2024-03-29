import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

import {AppRoutingModule} from './app-routing.module';
import {AppComponent} from './app.component';
import {LoginComponent} from './components/pages/login/login.component';
import {HttpClientModule} from '@angular/common/http';
import {FormsModule} from '@angular/forms';
import { CategoryListComponent } from './components/pages/category/category-list/category-list.component';
import { AlertErrorComponent } from './components/bootstrap/alert-error/alert-error.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    CategoryListComponent,
    AlertErrorComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {
}
