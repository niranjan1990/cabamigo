<?php

/* @var $this yii\web\View */

$this->title = 'Good Morning India';
?>
<div id="page">
<div class="container-fluid header-content" id="screen">
    <div class="row">
        <div class="col-md-12">
            <?= yii\authclient\widgets\AuthChoice::widget([
                'baseAuthUrl' => ['site/auth']
            ]) ?>
        </div>
    </div>
    <div class="row">
    </div>
</div>
<div class="container-fluid" id="about">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8"><h3 align="center" style="color:white;font-family: "Times New Roman", serif;">We've got what you need!</h3>
            <hr class="light">
            <p align="center">  We Initiated GOOD MORNING INDIA  Believing That we would
                transform your life into a comfortable and a cosy one by delivering the basic
                essential products early morning at your door step
                we hope to provide a service that meets your expectation and satisfaction.
            </p>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
<div class="container-fluid" id="services" >
    <div class="row">
        <div class="col-md-4"><p align="center"><h1>Voice of India</h1><br>
            <img src="/img/news.png"; height="150px" width="150px" style="position:relative"></p>
            <h3 align="center" style="background-color: #222; font-size: 14px;color:white;font-family: "Times New Roman", serif;">
            <p class="text-capitalize">
                A GOOD NEWSPAPER IS A NATION TALKING TO ITSELF NEWSPAPERS ARE LIKE MIRRORS OF THE WORLD. THEY HAVE BECOME PART AND PARCEL OF THE MODERN CIVILIZATION.
                <a href="#newsModal" class="btn" data-toggle="modal" id="news">Read More</a>
            </p>
            </h3>
            <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="text-align: center;">Voice of India</h4>
                        </div>
                        <div class="modal-body">
                            A GOOD NEWSPAPER IS A NATION TALKING TO ITSELF NEWSPAPERS ARE LIKE MIRRORS OF THE WORLD. THEY HAVE BECOME PART AND PARCEL OF THE MODERN CIVILIZATION. WE CANT IMAGINE BEGINNING OUR DAY WITHOUT READING NEWSPAPER ALONG WITH A HOT CUP OF COFFEE,BECAUSE OUR WORLD IS BECOMING QUITE COMPETITIVE DAY BY DAY. HENCE IT HAS BECOME ESSENTIAL TO IMMERSE OURSELVES WITH THE CURRENT AFFAIRS OF THE WORLD . CONSIDERING THIS WE ARE HERE , READY TO DELIVER THE EYES AND EARS OF THE WORLD AT YOUR DOORSTEP TO MAKE YOUR LIFE  CONVENIENT AND COMFORTABLE.
                        </div>
                        <div class="modal-footer">
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"><p align="center"><h1>Healthy India</h1><br>
            <img src="/img/healthy.jpg"; height="150px" width="150px" style="position:relative"></p>
            <h3 align="center" style="background-color:#222; font-size: 14px;color:white;font-family: "Times New Roman", serif;">
            <p class="text-capitalize">
                WHETHER IT IS A  CUP OF COFFEE OR TEA WITH YOUR LOVED ONES IN THE MORNING OR GIVING NUTRITIOUS FOOD TO YOUR LITTLE ONES , MILK PLAYS AN IMPORTANT ROLE .
                <a href="#healthModal" role="button" class="btn" data-toggle="modal" id="healthy">Read More</a>
            </p>
            </h3>
            <div class="modal fade" id="healthModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="text-align: center">Healthy India</h4>
                        </div>
                        <div class="modal-body">
                            WHETHER IT IS A  CUP OF COFFEE OR TEA WITH YOUR LOVED ONES IN THE MORNING OR GIVING NUTRITIOUS FOOD TO YOUR LITTLE ONES , MILK PLAYS AN IMPORTANT ROLE . IT CONTAINS CALCIUM , VITAMIN D , PROTEINS AND OTHER SUPPLEMENTS THAT ARE ESSENTIAL FOR OUR LIFE. DAILY INTAKE OF MILK ALSO ENHANCES OUR BONE HEALTH AND REDUCES THE RISKS OF HEART ATTACKS . THE CALCIUM IN THE MILK CAN BE MORE EASILY ABSORBED THAN FROM THE VEGETABLES.  HENCE WE DELIVER MILK AT YOUR DOOR STEP TO ENSURE YOU A HEALTHY LIFE.
                        </div>
                        <div class="modal-footer">
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"><p align="center"><h1>Nuturious India </h1><br>
            <img src="/img/nutri.png"; height="150px" width="150px" style="position:relative"></p>
            <h3 align="center" style="background-color:#222;font-size: 14px; color:white;font-family: "Times New Roman", serif;">
            <p class="text-capitalize">
                MOST PEOPLE DON'T INCLUDE SALADS IN THEIR DIET BECAUSE THEY ARE NOT AWARE OF THE BENEFITS. SALADS AS A WHOLE ARE LOW IN CALORIES AND HIGH IN FIBRES AND RICH IN OTHER NUTRIENTS .
                <a href="#nutriModal" role="button" class="btn" data-toggle="modal" id="healthy">Read More</a>
            </p>
            </h3>
            <div class="modal fade" id="nutriModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="text-align: center;">Healthy India</h4>
                        </div>
                        <div class="modal-body">
                            MOST PEOPLE DON'T INCLUDE SALADS IN THEIR DIET BECAUSE THEY ARE NOT AWARE OF THE BENEFITS. SALADS AS A WHOLE ARE LOW IN CALORIES AND HIGH IN FIBRES AND RICH IN OTHER NUTRIENTS . ADDING SALADS TO YOUR BREAKFAST WILL HELP YOU TO STAY FIT AND HEALTHY .  IT CAN REDUCE THE RISK OF NUMEROUS DISEASES AS IT HELPS TO PREVENT OBESITY. HENCE WE MAKE THIS AVAILABLE TO YOU EVERYDAY IN A DELICIOUS AND APPEALING WAY THAT YOU CANT REFUSE.
                        </div>
                        <div class="modal-footer">
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>