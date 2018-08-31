import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'firstError'
})
export class FirstErrorPipe implements PipeTransform {

  transform(obj: any, args?: any): any {

    if(obj){
    var keys = Object.keys(obj);
    if (keys && keys.length>0) {
      return keys[0];
    }
  }
    return null;
  }

}
