<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kendo Test</title>
    <!-- Kendo UI CSS -->
    <link href="{{ asset('kendo/all.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Kendo UI JS -->
    <script src="{{ asset('kendo/all.js') }}"></script>
</head>
<body class="k-body">

    <h1>My Kendo Grid Test</h1>

    <!-- This is the container -->
    <div id="myGrid"></div>

    <!-- Initialization script -->
    <script>
      $(document).ready(function() {
          $("#myGrid").kendoGrid({
             columnMenu: {
                    filterable: true
                },
                            toolbar: ["excel" , "pdf"],
            excel: {
                fileName: "export.xlsx"
            },pdf: {
                allPages: true
            },
              dataSource: {
                  data: window.kendoTableData,
                  pageSize: 10,
                 
              },
              pageable: {
                    refresh: true,
                    pageSizes: true,
                    buttonCount: 5
                },
              sortable: true,
               reordable : true,
                resizable : true,
                groupable: true,
                width: 'auto',
              columns: window.kendoTableColumns,
               filterable: {
                    mode: "row",
                    operators: {
                        string: {
                            contains: 'Contient',
                            eq: 'Egal'
                        }
                    }
                }
          });
      });
    </script>
</body>
</html>


