// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable({
        "dom": '<"row"<"col-md-6 "f><"#btntoogle.col-md-6"B>>t<"row"<"col-4"l><"col-4"i><"col-4"p>> ' ,
        buttons: [
            {
                extend: 'copy',
                text: 'Copiar',
                exportOptions: {
                    modifier: {
                        page: 'current' }}
            },

            {
                extend: 'pdf',
                text: 'PDF',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Gerar PDF dessa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, node, config);
                    }

                }
            },

            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Exportar essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, node, config);
                    }

                }
            }, 

            {
                extend: 'print',
                text: 'Imprimir',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Imprimir essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, node, config);
                    }

                }
            },
            {
                extend: 'colvis',
                text: 'Colunas'
            }

        ],

        "language": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
        
        
    }) 
   


});


$(document).ready(function() {
    $('#dataCheque').DataTable({
        "dom": '<"row"<"col-md-6 "f><"#btntoogle.col-md-6">>t<"row"p><"row"B> ' ,
         lengthMenu: [
        [ 5, 10, 15, -1 ],
        [ '5 rows', '10 rows', '15 rows', 'Show all' ]
    ],
        buttons: [
            {
                extend: 'copy',
                text: 'Copiar',
                exportOptions: {
                    modifier: {
                        page: 'current' }}
            },

            {
                extend: 'pdf',
                text: 'PDF',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Gerar PDF dessa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, node, config);
                    }

                }
            },

            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Exportar essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, node, config);
                    }

                }
            }, 

            {
                extend: 'print',
                text: 'Imprimir',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Imprimir essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, node, config);
                    }

                }
            },
            {
                extend: 'pageLength',
                text: 'Show rows'
             
               
            }

        ],

        "language": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },


    })


});

$(document).ready(function() {
    $('#dataBoleto').DataTable({
        "dom": '<"row"<"col-md-6 "f><"#btntoogle.col-md-6">>t<"row"p><"row"B> ' ,
         lengthMenu: [
        [ 5, 10, 15, -1 ],
        [ '5 rows', '10 rows', '15 rows', 'Show all' ]
    ],
        buttons: [
            {
                extend: 'copy',
                text: 'Copiar',
                exportOptions: {
                    modifier: {
                        page: 'current' }}
            },

            {
                extend: 'pdf',
                text: 'PDF',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Gerar PDF dessa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, node, config);
                    }

                }
            },

            {
                extend: 'excel',
                text: 'Excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Exportar essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, node, config);
                    }

                }
            }, 

            {
                extend: 'print',
                text: 'Imprimir',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                },
                action: function ( e, dt, node, config ) {
                    r =  confirm("Deseja Imprimir essa Página");
                    if(r)
                    {
                        $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, node, config);
                    }

                }
            },
            {
                extend: 'pageLength',
                text: 'Show rows'
             
               
            }

        ],

        "language": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
        

    })
 


});





