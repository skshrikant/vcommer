import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FirstErrorPipe } from './first-error.pipe';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [FirstErrorPipe],
  exports : [FirstErrorPipe]
})
export class SharedModule { }
