import { Component, OnInit } from '@angular/core';
import{student} from '../student';
import{NgForm} from '@angular/forms';
import{NewserviceService} from '../newservice.service';
@Component({
  selector: 'app-link',
  templateUrl: './link.component.html',
  styleUrls: ['./link.component.css']
})
export class LinkComponent implements OnInit {
  student=new student();
  isregisterd=false;

  constructor(private applyservice:NewserviceService) { }

  ngOnInit() {
  }
 registration(f:NgForm){
  
   this.applyservice.store(this.student).subscribe( data => {
       this.isregisterd = true;
       console.log("sucess");
       f.reset();
     },
     (err) => {this.isregisterd=false}
   );
 }
}
