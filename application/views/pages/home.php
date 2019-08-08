<div class="container"> 
<div>
    <form action="">
        <div class="form-group">
            <input type="search" placeholder="Search Items" name="search" id="search" oninput="Search();" onchange="Details();" list="searches">
            <datalist id="searches"></datalist>
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
</div>
<script type="text/javascript">
      
      async function Search()
        {
           
            search = document.getElementById('search');
             datalist = document.getElementById('searches'); 
             datalist.innerHTML = "";
            if(search.value.length>0)
            {
                var url = "<?php echo site_url('ExamApi/search') ?>?q="+search.value;
                requests = await fetch(url);
                responses = await requests.json();
                responses.map(r =>{
                    var option = document.createElement('option');
                        option.value = r.itemName;
                        option.id = r.id;
                        // $('#searches').append(option);
                        datalist.appendChild(option);
                });
                
            }
        }

        async function Details()
        {
            // details.innerT = "";
            var details = document.getElementById('details');
            var nar = responses.filter((r) => (r.itemName === search.value));
            itemName = nar[0];
            
                var ptag1 = document.createElement('p'); 
                var ptag2 = document.createElement('p'); 
                var ptag3 = document.createElement('p'); 
                var node1 = document.createTextNode(itemName['id']);
                var node2 = document.createTextNode(itemName['itemName']);
                var node3 = document.createTextNode(itemName['description']);
                ptag1.appendChild(node1);
                ptag2.appendChild(node2);
                ptag3.appendChild(node3);
                $('#details').append(ptag1);
                $('#details').append(ptag2);
                $('#details').append(ptag3);
                // console.log(node);
                // foreach(itemName as value)
                // {
                //     var ptag = document.createElement('p'); 
                //     var node1 = document.createTextNode(itemName['i']);
                //     ptag.appendChild(node);
                //     $('#details').append(ptag);
                // }
            
            
        }

    $(document).ready(function(){

        ajax();
        async function ajax()
        {
            var url = "<?php echo site_url('ExamApi/homeApi') ?>";
            request = await fetch(url);
            response = await request.json();
            response.map(r => {
                var para = document.createElement('p');
                textnode = r.itemName;
                var textnode = document.createTextNode(textnode);
                para.appendChild(textnode);
                $('#result').append(para);

            });
           

        }
      
        
    });
</script>  
<div id="result"></div>
<div id="details"></div>
</div>