import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { LinkComponent } from './link/link.component';
import {} from './app.module'
import { from } from 'rxjs';

const routes: Routes = [{path:'',component:LinkComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
