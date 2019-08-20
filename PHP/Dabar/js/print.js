  function genPDF(){
            var doc = new jsPDF();
            doc.fromHTML($('#reporto').get(0),20,20,{
                'width':500 });
            doc.save('Weekly Report.pdf');
        }