$(function () {
  // Get Collapse Sidebar Icon
  let collapseSidebar = document.getElementById("collapse-sidebar");
  // Get Collapsable Sidebar
  let collapsableSidebar = document.getElementById("collapsable-sidebar");

  // On Collapse Sidebar Icon Click
  collapseSidebar.onclick = function () {
    // Toggle Hide Class For Sidebar
    collapsableSidebar.classList.toggle("hide-sidebar");
    // Rotate Collapse Sidebar Icon
    collapseSidebar.classList.toggle("fa-rotate-90");
  };


  // Get Document Language
  let bodyLanguage = $("html").attr("lang");
  // Check Document Language
  if (bodyLanguage !== "en") {
    // Call Datatable Plugin With Document Language
    $(".dataTable").DataTable({
      "order": [],
      lengthMenu: [[5, 10, 25, 50, 75, -1], [5, 10, 25, 50, 75, "الكل"]],
      "language": {
        "url": `/assets/vendors/datatables/languages/${bodyLanguage}.json`
      }
    });
    // Define Pagination Numbers Limit
    $.fn.DataTable.ext.pager.numbers_length = 5;
  } else {
    // Call Datatable Plugin With Default Language (EN)
    $(".dataTable").DataTable({
      "order": [],
      lengthMenu: [[5, 10, 25, 50, 75, -1], [5, 10, 25, 50, 75, "All"]]
    });
    // Define Pagination Numbers Limit
    $.fn.DataTable.ext.pager.numbers_length = 5;
  }
});
