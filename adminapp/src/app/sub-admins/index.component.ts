import { Component, OnInit, ViewChild } from '@angular/core';
import { ModalDirective } from 'ngx-bootstrap/modal';

@Component({
  selector: 'trd-index',
  templateUrl: './index.component.html',
  styles: []
})
export class IndexComponent implements OnInit {
  @ViewChild('autoShownModal') autoShownModal: ModalDirective;
  
  constructor() {}

  ngOnInit() {
  }

}
