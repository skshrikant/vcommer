export class SubAdmin {
    id:number;
    username:string='';
    security_code:string='';
    password:string='';
    email?:string='';
    profile_image?:string='';
    online_status?:number=0;
    is_suspended?:number=0;
    is_deleted?:number=0;
    created_by?:string='';
    created_at?:Date;
    modified_by?:string;
    modified_at?:Date;
    selected?:boolean=!1;
    permissions:Permissions
}

export class Permissions {
    id:number;
    admin_user_id:number;
    as_admin:number=0;
    manage_sub_admin:number=0;
    manage_member:number=0;
    manage_carousel:number=0;
    audit:number=0;
    chat:number=0;
    view_errors:number=0;
    statistic:number=0;
    account_alarm:number=0;
    created_at?:Date
}
    
export const PermissionsArray =  [{value:'as_admin',name: 'Login as an admin'},
    {value:'manage_sub_admin',name:'Manage Sub-Admin'},
    {value:'manage_member',name:'Member Information'}, {value:'manage_carousel',name:'Manage Carousels'},
    {value:'audit',name:'Audit'},{value:'chat',name:'Chat'},
    {value:'view_errors',name:'View Errors'},{value:'statistic',name:'Manage Statictics'},
    {value:'account_alarm',name:'Account Alarm'}];