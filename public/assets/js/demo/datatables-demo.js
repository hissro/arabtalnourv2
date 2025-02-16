// Call the dataTables jQuery plugin
$(document).ready(function() 
{
  $('#example').DataTable({
    pageLength: 5,  
    lengthMenu: [5, 10, 15 , 20 , 25 , 30],
    language: {
      "lengthMenu": "عرض _MENU_ سجلات",
      "show" : "عرض",
      "search":         "البحث:",
      "emptyTable":     "لاتوجد بيانات",
      "info":           "عرض _START_ الي _END_ من _TOTAL_ السجلات",
      "infoEmpty":      "عرض 0 الي 0 of 0 السجلات",
      "zeroRecords":    "لا توجد سجلات مطابقة للبحث",
      "infoFiltered":   "",
      "sInfoEmpty": "عرض 0 to 0 of 0 سجل",
      "sInfoFiltered": "(مفلتر من _MAX_ مجموع السجلات)",
      'paginate': {
        'previous': 'السابق',
        'next': 'التالي'
      }
    }
    } 
  );

  $('#dataTable').DataTable({
    pageLength: 5,  
    lengthMenu: [5, 10, 15 , 20 , 25 , 30],
    language: {
      "lengthMenu": "عرض _MENU_ سجلات",
      "show" : "عرض",
      "search":         "البحث:",
      "emptyTable":     "لاتوجد بيانات",
      "info":           "عرض _START_ الي _END_ من _TOTAL_ السجلات",
      "infoEmpty":      "عرض 0 الي 0 of 0 السجلات",
      "zeroRecords":    "لا توجد سجلات مطابقة للبحث",
      "infoFiltered":   "",
      "sInfoEmpty": "عرض 0 to 0 of 0 سجل",
      "sInfoFiltered": "(مفلتر من _MAX_ مجموع السجلات)",
      'paginate': {
        'previous': 'السابق',
        'next': 'التالي'
      }
    }
    } 
  );
});
