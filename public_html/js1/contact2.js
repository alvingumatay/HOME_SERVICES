var table = document.getElementById('table');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         document.getElementById("contact").value = this.cells[3].innerHTML;
                       
                        document.getElementById("dtime").value = this.cells[1].innerHTML;
                        
                    };
                }
    