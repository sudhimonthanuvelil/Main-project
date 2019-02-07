import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-studentlist',
  templateUrl: './studentlist.component.html',
  styleUrls: ['./studentlist.component.css']
})
export class StudentlistComponent implements OnInit {
  public studentdetails:any=[{rollnumber:"1",name:"name1",batch:"batch1",department:"department1"},
  {rollnumber:"2",name:"name2",batch:"batch3",department:"department2"},
  {rollnumber:"3",name:"name3",batch:"batch3",department:"department3"}
];
selstudent:any;
addstudent(data:any){
  this.selstudent=data;
}

  constructor() { }

  ngOnInit() {
  }

}
