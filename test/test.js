document.addEventListener('DOMContentLoaded', () => {

    $(document).ready(function() {
        $department = $("select[name='dep']");
        $cname = $("select[name='cname']");
        
        $department.change(function() {
        
        if ($(this).val() == "talent") {
        $("select[name='cname'] option").remove();
        $("<option>John Smith</option>").appendTo($cname);
        $("<option>Marry Jones</option>").appendTo($cname);
        }
        
        if ($(this).val() == "passion") 
        {
        $("select[name='cname'] option").remove();
        $("<option>Jessy McBeth</option>").appendTo($cname);
        $("<option>Bob Smith</option>").appendTo($cname);
        }
        
        if ($(this).val() == "freelancer") 
        {
        $("select[name='cname'] option").remove();
        $("<option>Contact name</option>").appendTo($cname);
        }
        
        });
        });

});