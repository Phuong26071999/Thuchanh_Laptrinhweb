<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/074f3b5285.js" crossorigin="anonymous"></script>


<script src="/js/bundle.js" type="text/javascript"></script>


<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }

        function addItem(){
            const containner = document.querySelector('.container');
            const cover_create = document.createElement('div');
            const cover_content = document.createElement('div');
            const drink_item = document.createElement('div');
            const row = document.createElement('div');
            //col1
            const col1 = document.createElement('div');
            const form_bodyleft = document.createElement('div');
            const hinh = document.createElement('img');
            const input_hinh = document.createElement('input');
            
            //col2
            const col2 = document.createElement('div');
            const form_bodyright = document.createElement('div');
            const ten_giay = document.createElement('p');
            const ten_giay_content = document.createTextNode('Tên giày')
            const input_ten =  document.createElement('input');
            const ten_gia = document.createElement('p');
            const ten_gia_content = document.createTextNode('Giá')
            const input_gia =  document.createElement('input');
            const mo_ta = document.createElement('p');
            const mo_ta_content = document.createTextNode('Mô tả');
            const txta = document.createElement('textarea');
            const button = document.createElement('button');
            const button_content = document.createTextNode('Delete');

            drink_item.className = 'drink_item';
            cover_create.className = 'cover_create';
            cover_content.className = 'cover_content';
            button.id = 'xoa';
            row.className = 'row';
            //col 1
            col1.className = 'col';
            form_bodyleft.className = 'form_bodyleft';
            input_hinh.name = 'drinkImage';
            
            //col 2
            col2.className = 'col';
            form_bodyright.className = 'form_bodyright';
            input_ten.name = 'txtName';
            input_gia.name = 'txtCost';
            txta.name = 'txe';
            txta.id = 'detail';
            button.className = 'btn btn-danger';

            hinh.setAttribute("src", "./images/layout/nike.jpg");
            hinh.setAttribute("height","330px");
            hinh.setAttribute("width","400px");
            txta.setAttribute("placeholder", "Nhập mô tả giày");
            input_hinh.setAttribute("type","file");
            input_ten.setAttribute("type","text");
            input_ten.setAttribute("placeholder", "Nhập tên giày");
            input_gia.setAttribute("type","text");
            input_gia.setAttribute("placeholder", "Nhập giá giày");
            txta.setAttribute("cols","70");
            txta.setAttribute("rows","8");
            button.setAttribute("onclick","deleteItem(e)");
            button.setAttribute("type","button");
            //add col1
            form_bodyleft.appendChild(hinh);
            form_bodyleft.appendChild(input_hinh);
            col1.appendChild(form_bodyleft);

            //add col2
            mo_ta.appendChild(mo_ta_content);
            ten_giay.appendChild(ten_giay_content);
            form_bodyright.appendChild(ten_giay);
            form_bodyright.appendChild(input_ten);
            ten_gia.appendChild(ten_gia_content);
            form_bodyright.appendChild(ten_gia);
            form_bodyright.appendChild(input_gia);
            form_bodyright.appendChild(mo_ta);
            form_bodyright.appendChild(txta);
            col2.appendChild(form_bodyright);

            row.appendChild(col1);
            row.appendChild(col2);
            button.appendChild(button_content);
            drink_item.appendChild(row);
            cover_content.appendChild(drink_item);
            cover_content.appendChild(button);
            cover_create.appendChild(cover_content);
            containner.appendChild(cover_create);
        }




        function addItem2(){
            const containner = document.querySelector('.container');
            const cover_create = document.createElement('div');
            const cover_content = document.createElement('div');
            const drink_item = document.createElement('div');
            const row = document.createElement('div');
            //col1
            const col1 = document.createElement('div');
            const form_bodyleft = document.createElement('div');
            const ten_mon = document.createElement('p');
            const ten_mon_content = document.createTextNode('Tên món')
            const input_ten =  document.createElement('input');
            const ten_gia = document.createElement('p');
            const ten_gia_content = document.createTextNode('Giá')
            const input_gia =  document.createElement('input');
            const input_hinh = document.createElement('input');
            
            //col2
            const col2 = document.createElement('div');
            const form_bodyright = document.createElement('div');
            const mo_ta = document.createElement('p');
            const mo_ta_content = document.createTextNode('Mô tả');
            const txta = document.createElement('textarea');
            const button = document.createElement('button');
            const button_content = document.createTextNode('Delete');

            drink_item.className = 'drink_item';
            cover_create.className = 'cover_create';
            cover_content.className = 'cover_content';
            button.id = 'xoa_mon';
            row.className = 'row';
            //col 1
            col1.className = 'col';
            form_bodyleft.className = 'form_bodyleft';
            input_ten.name = 'txtName';
            input_gia.name = 'txtCost';
            input_hinh.name = 'drinkImage';
            
            //col 2
            col2.className = 'col';
            form_bodyright.className = 'form_bodyright';
            txta.name = 'txe';
            txta.id = 'detail';
            button.className = 'btn btn-danger';

            txta.setAttribute("placeholder", "Nhập mô tả");
            input_hinh.setAttribute("type","file");
            input_ten.setAttribute("type","text");
            input_ten.setAttribute("placeholder", "Nhập tên món");
            input_gia.setAttribute("type","text");
            input_gia.setAttribute("placeholder", "Nhập giá");
            txta.setAttribute("cols","70");
            txta.setAttribute("rows","8");
            button.setAttribute("onclick","xoa_mon(e)");
            button.setAttribute("type","button");
            //add col1
            ten_mon.appendChild(ten_mon_content);
            form_bodyleft.appendChild(ten_mon);
            form_bodyleft.appendChild(input_ten);
            ten_gia.appendChild(ten_gia_content);
            form_bodyleft.appendChild(ten_gia);
            form_bodyleft.appendChild(input_gia);
            form_bodyleft.appendChild(input_hinh);
            col1.appendChild(form_bodyleft);

            //add col2
            mo_ta.appendChild(mo_ta_content);
            form_bodyright.appendChild(mo_ta);
            form_bodyright.appendChild(txta);
            col2.appendChild(form_bodyright);

            button.appendChild(button_content);
            row.appendChild(col1);
            row.appendChild(col2);
            
            drink_item.appendChild(row);
            cover_content.appendChild(drink_item);
            cover_content.appendChild(button);
            cover_create.appendChild(cover_content);
            containner.appendChild(cover_create);

        }

        document.body.addEventListener('click', xoa_mon);
        function xoa_mon(e){
            let P = e.target.id;

            if(P === 'xoa_mon'){
                e.target.parentElement.parentElement.remove(); 
                
            }  
        }

        document.body.addEventListener('click', xoa_loai);
        function xoa_loai(e){
            let P = e.target.id;
            if(P === 'xoa_loai'){
                e.target.parentElement.parentElement.parentElement.remove(); 
                
            }  
        }

        document.body.addEventListener('click', order);
        function order(e){
            let count = 0;
            const counter = document.getElementById('counter');
            const cl = counter.classList;
            const c = 'animated-counter';

           /*  counter.innerText = count;
            cl.remove(c, cl.contains(c));
            setTimeout(() =>
            counter.classList.add('animated-counter')
            ,1) */
            
            let P = e.target.id;
            if(P === 'ORDER'){
                
                counter.textContent++;
                cl.remove(c, cl.contains(c));
                setTimeout(() =>
                counter.classList.add('animated-counter')
                ,1)
                
            }
            
        }
        
       
        
</script>