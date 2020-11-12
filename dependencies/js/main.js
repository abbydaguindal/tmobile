//variables
let  inputSplit, inputDesc, inputName, inputLob, inputGroup1, inputGroup2, inputGroup3,splitId, lobId,group1Id,group2Id,group3Id, pageId

let kpi =[
  "Calls_Answered", "Acceptable", "Calls_Offered", "Calls_Abandoned", "ASA", "Ring_Time",
  "Staff_Time", "ACD_Time", "ACD_OtherTime", "ACDAux_OutTime", "ACW_Time", "Avail_Time",
  "ACW_OutCalls", "Aux_OutCalls", "ACW_OutTime", "Aux_OutTime", "Aux_Time",
  "Aux0", "Aux1", "Aux2", "Aux3", "Aux4", "Aux5", "Aux6", "Aux7", "Aux8", "Aux9",
  "Transferred"
]; 

function switchClient(client_ident_new,client_name_new) {  

  if(client_name !== client_name_new){
  
    $.ajax({
      url: '../clients/controller/PostClientController.php',
      type: 'POST',
      data:{project_id:client_ident_new,client_name_new:client_name_new,page:pageId,cmd:'updateSession'},
      dataType: 'json',    
      beforeSend: function() {               
        if(client_name_new !== client_name){
          Swal.fire({
            title: 'Changing project to '+client_name_new,        
            timer: 3.6e+6,
            timerProgressBar: true,
            onBeforeOpen: () => {
              Swal.showLoading()
              timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                  const b = content.querySelector('b')
                  if (b) {
                    b.textContent = Swal.getTimerLeft()
                  }
                }
              }, 100)
            },
            onClose: () => {
              clearInterval(timerInterval)          
            }
          });
        }           
      },
      success: function(response){      
        
          window.location.reload();
        
      },      
    });
  }

}

window.onload = function WindowLoad(event) {

  var page = window.location.pathname;
  pageId = page.replace(/^[\/]+|[\/]+$/g, "");
  
  activateLink(pageId)
}

function activateLink(id){
  //add active class  
  let idIndex = id.indexOf('/')
  let pageLetters = id.split('').splice(idIndex+1)
  let page = ''

  for (let p = 0; p < pageLetters.length; p++) {
    const element = pageLetters[p];
    page += element
  }

  selected = document.getElementById(page); 

  if(selected == null){
    if(id.includes('settings')){
      selected = document.getElementById('settings'); 
      selected.parentNode.classList.add('active')
    } else if(id.includes('custom-table')){
      selected = document.getElementById('custom'); 
      selected.parentNode.classList.add('active')
    }
  } else {
    selected.parentNode.classList.add('active')   
  }   
  
}

// Sortable Div
$( function() {
  $( "#sortable" ).sortable();
  $( "#sortable" ).disableSelection();
});


listClient()
// setClient(clients[0]['project_ident'],clients[0]['client_ident_avaya'],clients[0]['client_name'],clients[0]['cms_id'],clients[0]['acd']);
function listClient(){
      

  var projects = document.getElementById('projectList');

  $.ajax({
    url: '../clients/controller/GetClientController.php',
    type: 'POST',
    data:{user:userIdent, userLevel:userLevel},
    dataType: 'json',    
    beforeSend: function(){

    },
    success: function (response) {
      clients = response                 
      response.forEach(element => {
        projects.innerHTML += '<button class="dropdown-item text-sm"  onclick="return switchClient(this.id, this.innerText);" id="'+element['project_id']+'">'+element['client_name']+'</button>';
      });
      
    }
  });

  
}
getCustomPage(project_id)
function getCustomPage(project_id) {

  var dataString = "project_id=" + project_id;
  $.ajax({
    url: '../settings/controller/GetPagesController.php',
    data: dataString,
    type: 'GET',
    dataType: 'json',    
    beforeSend: function() {               
               
    },
    success: function(response){   
      // pages = response['data'].map(function(item) { return item[2].toLowerCase(); })
      let item = ''
      if(response['data'].length > 5){
        for (let p = 5; p < response['data'].length; p++) {
          const element = response['data'][p];
  
            item += `<a class="dropdown-item" href="../custom-table/index.php?page_id=${element[0]}" onclick="return loadPage(this);" id="page_${element[0]}">${element[2]}</a>`
        }
        $('#custom-table .pages').html(item)
      } else{
        item += `<a class="dropdown-item disabled" href="" onclick="return loadPage(this);" >No Custom Page</a>`
        $('#custom-table .pages').html(item)
      }     
    }    
  });
}

