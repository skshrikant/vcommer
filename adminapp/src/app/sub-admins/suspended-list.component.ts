import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {SubAdminService} from "./sub-admin.service";
import {SubAdmin} from "./models/sub-admin";

@Component({
  selector: 'trd-suspended-list',
  templateUrl: './suspended-list.component.html',
  styles: []
})
export class SuspendedListComponent implements OnInit {
  private subscription;
  private subAdminList:SubAdmin[];
    private enableButtons=false;

  constructor(private subAdminService: SubAdminService, private route: ActivatedRoute, private router: Router) {
  }
  ngOnInit() {
    this.subAdminService.getSubAdmins(1);
    this.subscription = this.subAdminService.subAdminChanged
        .subscribe((adminList: SubAdmin[])=> {
          this.subAdminList = adminList;
          this.subAdminList.map((admin)=> {
            admin.selected = admin.selected ? true : !1;
          });
        })
  }

    deleteAdmins(suspend: boolean = false) {
        const selectedAdmins = []
        this.subAdminList.forEach((admin: SubAdmin)=> {
            if (admin.selected) {
                return selectedAdmins.push(admin['id']);
            }
        });
        let serviceOption = (suspend) ? this.subAdminService.suspend(selectedAdmins,0) : this.subAdminService.delete(selectedAdmins);
        serviceOption.subscribe(deleteStatus=> {
            if (deleteStatus) {
                this.subAdminService.deleteLocal(selectedAdmins);
                this.toggleActionButtons();
            }
        })
    }

    toggleActionButtons() {
        const selected = this.subAdminList.filter((admin: SubAdmin)=> {
            return admin.selected;
        }).length;
        this.enableButtons = false;
        setTimeout(()=> {
            this.enableButtons = !!selected;
        }, 50)
    }

    search(searchValue){
        this.subAdminService.filterAdmin(searchValue);
    }
}
