console.log('123');
var ctx = document.getElementById('mbtiChart').getContext('2d');
   // let mbti = jQuery.parseJSON(data);
    console.log(data.E);
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['برون گرایی', 'درون گرایی', 'حسی', 'شهودی', 'احساسی', 'فکری','دریافتگرا','قضاوتگرا'],
            datasets: [{
                label: 'جدول mbti',
                data: [data.mbti.E,data.mbti.I,data.mbti.S,data.mbti.N,data.mbti.F,data.mbti.T,data.mbti.P,data.mbti.J],
                backgroundColor: [
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'}),
                  randomColor({luminosity: 'light'})

                ],
                borderColor: [
                  randomColor({luminosity:   'dark'}),
                  randomColor({luminosity:   'dark'}),
                  randomColor({luminosity:   'dark'}),
                  randomColor({luminosity:   'dark'}) ,
                   randomColor({luminosity:  'dark'}),
                    randomColor({luminosity: 'dark'}),
                    randomColor({luminosity: 'dark'}),
                    randomColor({luminosity: 'dark'})
                    ],
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            responsive:true,
            legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'white',
                defaultFontFamily: 'sanse-serif'
            }
        }
        }
    });


let i=0;
let  taskDataset=[];
let  taskISDataset=[];
let  taskSEDataset=[];
let  taskIEDataset=[];



    data.isu.forEach(task => {
    // console.log(i);
    // console.log(task);
        let taskData={
            x:task['e'],
            y:task['s'],
            r:task['i']*2
        };
        let taskISData={
            x:task['i'],
            y:task['s'],
        };

        let taskSEData={
            x:task['e'],
            y:task['s'],
        };


        let taskIEData={
            x:task['e'],
            y:task['i'],
        };
        taskDataset.push(taskData);
        taskISDataset.push(taskISData);
        taskSEDataset.push(taskSEData);
        taskIEDataset.push(taskIEData);

        i++;
    });
    console.log(data.isu);
    let fuckingTasksData=[];
    let fuckingTasksIEData=[];
    let fuckingTasksISData=[];
    let fuckingTasksSEData=[];
    for(let q=0;q<=39;q++){
        let aFuckingTaskData={
              "label":data.isu[q]['taskName']
             ,"data":[taskDataset[q]]
             ,"backgroundColor":randomColor({luminosity: 'light',count: 80})
        };
        let aFuckingTaskISData={
              "label":data.isu[q]['taskName']
             ,"data":[taskISDataset[q]]
             ,"backgroundColor":randomColor({luminosity: 'dark',count: 40})
        };
        let aFuckingTaskSEData={
              "label":data.isu[q]['taskName']
             ,"data":[taskSEDataset[q]]
             ,"backgroundColor":randomColor({luminosity: 'dark',count: 40})
        };let aFuckingTaskIEData={
              "label":data.isu[q]['taskName']
             ,"data":[taskIEDataset[q]]
             ,"backgroundColor":randomColor({luminosity: 'dark',count: 40})
        };
        fuckingTasksData.push(aFuckingTaskData);
        fuckingTasksIEData.push(aFuckingTaskIEData);
        fuckingTasksISData.push(aFuckingTaskISData);
        fuckingTasksSEData.push(aFuckingTaskSEData);

    }
    console.log(fuckingTasksData);
    var ttx = document.getElementById('taskChart').getContext('2d');
   // let mbti = jQuery.parseJSON(data);
new Chart(ttx,
    {type:"bubble"
    ,data:{
        "datasets": fuckingTasksData
      },options:{
        responsive: true,
      maintainAspectRatio: true,
      aspectRatio:1,
      legend: {
            labels: {
                // This more specific font property overrides the global property
                defaultFontFamily:"iranYekan",
                defaultFontSize:14
            }
        }
      }

    });











    var cct = document.getElementById('ChartIE').getContext('2d');
    new Chart(cct,
        {type:"scatter"
        ,data:{
            "datasets": fuckingTasksIEData
          },options:{
            responsive:true,
            aspectRatio:1,
            scales: {
              xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
          }

        });




        var cct = document.getElementById('ChartSE').getContext('2d');
        new Chart(cct,
            {type:"scatter"
            ,data:{
                "datasets": fuckingTasksSEData
              },options:{
                responsive:true,
                aspectRatio:1,
                scales: {
                  xAxes: [{
                    type: 'linear',
                    position: 'bottom'
                }]
            }
              }

            });




            var cct = document.getElementById('ChartIS').getContext('2d');
            new Chart(cct,
                {type:"scatter"
                ,data:{
                    "datasets": fuckingTasksISData
                  },options:{
                    responsive:true,
                    aspectRatio:1,
                    scales: {
                      xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }]
                }
                  }

                });



   $(document).ready(()=>{

      let winWidth= $(window).width();
      console.log(winWidth);
      if(winWidth>=650){
      }else if ( winWidth<=700 && winWidth>=450) {

      }else if (winWidth<650) {
        $('#taskChart').addClass('d-none');

      }
$('#taskTable').DataTable();
    })
    // set image


    //reset on change

    $(window).on('resize', function(){
      let winWidth= $(window).width();
    //  console.log(winWidth);
      if(winWidth>=800){
      //  console.log('big');
        if($('#taskChart').hasClass('d-none'))
          $('#taskChart').removeClass('d-none');
    }
      else if (winWidth<800) {
        $('#taskChart').addClass('d-none');
    }
  });
