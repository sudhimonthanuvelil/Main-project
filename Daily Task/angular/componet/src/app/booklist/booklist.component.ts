import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-booklist',
  templateUrl: './booklist.component.html',
  styleUrls: ['./booklist.component.css']
})
export class BooklistComponent implements OnInit {
public bookdetails:any=[{title:"book1",author:"author1",publisher:"publisher1"},
{title:"book1",author:"author1",publisher:"publisher1"},
{title:"book1",author:"author1",publisher:"publisher1"}];
selbook:any;
addbook(data:any){
  this.selbook=data;
}
  constructor() { }

  ngOnInit() {
  }

}
