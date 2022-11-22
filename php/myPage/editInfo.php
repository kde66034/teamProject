<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $youImgFile = $_POST['youImgFile'];

    $sql = "SELECT myMemberID, youEmail, youPass, youPhone, youImgFile, youImgSize FROM myMember WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $info = $result -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이 페이지 - 정보 수정</title>

    <?php include "../include/link.php" ?>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <section id="editInfo" class="container">
        <h2>마이 페이지</h2>
        <div class="myBannerImg"></div>
        <div class="editInfo__wrap">
                <h3>내 정보 수정<span> * 필수 입력 사항</span></h3>
                <table class="profile">
                    <tbody>
                        <tr>
                            <td>프로필</td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if($youImgFile === NULL){
                                        $youImgFile = "earthonhero.png";
                                    }
                                ?>
                                
                                <img src="../assets/img/profile/<?=$info['youImgFile']?>" class="personal" alt="프로필 이미지">
                                <div class="profileInfo">
                                    <h3><em><?=$_SESSION['youName']?></em>님, 환영합니다!</h3>
                                    <p><?=$_SESSION['youEmail']?></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- //profile -->
                
                <form action="editInfoSave.php" method="post" name="editInfo" onsubmit="return editInfoChecks()">
                    <table class="memberInfo">
                        <tbody>
                            <tr>
                                <td colspan="2">회원정보 변경</td>
                            </tr>
                            <tr>
                                <td class="editInfo__notice">※ 변경하고자 하는 정보만 수정해주세요. </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="youName">이름*</label>
                                    <input type="text" id="youName" name="youName" placeholder="변경시에만 입력해주세요." value="<?=$_SESSION['youName']?>" required>
                                    <p class="msg" id="youNameComment"><!-- * 이름은 한글로만 작성 가능합니다. --></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="youPass">비밀번호*</label>
                                    <input type="password" id="youPass" name="youPass" placeholder="변경시에만 입력해주세요." value="<?=$info['youPass']?>" required>
                                    <p class="msg" id="youPassComment"><!-- * 비밀번호는 특수기호와 숫자가 함께 들어가야 합니다. --></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="youPassC">비밀번호 확인*</label>
                                    <input type="password" id="youPassC" name="youPassC" placeholder="확인 비밀번호를 입력해주세요." required>
                                    <p class="msg" id="youPassCComment"><!-- * 비밀번호가 일치하지 않습니다. --></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="youPhone">휴대전화*</label>
                                    <input type="text" id="youPhone" name="youPhone" placeholder="변경시에만 입력해주세요." value="<?=$info['youPhone']?>" required>
                                    <p class="msg" id="youPhoneComment"><!-- * 올바른 휴대전화 번호를 입력해주세요. (010-0000-0000) --></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="account__btn">
                                    <div class="quitMember"><a href="removeAccount.php">탈퇴하기</a></div>
                                    <div class="PWcheck__btn">
                                        <button type="submit"><a class="PWcheck__end">회원정보 변경</a></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <form action="profileSave.php" method="post" name="profileSave" enctype="multipart/form-data">
                    <table class="memberInfo">
                        <tbody>
                            <tr>
                                <td colspan="2">프로필 이미지 변경</td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="youImgFile">파일 업로드</label>
                                    <input type="file" name="youImgFile" id="youImgFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
                                </td>
                            </tr>
                            <tr>
                                <td class="profileSave__btn">
                                    <div class="PWcheck__btn">
                                        <button type="submit"><a class="PWcheck__end">프로필 변경</a></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </form>

                    
        </div>
        <!-- //editInfo__wrap -->
    </section>
    <!-- //editInfo -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/custom.js"></script>

    <script>
        function editInfoChecks(){
            // 이름 공백 확인
            if($("#youName").val() == ""){
                $("#youNameComment").text("이름을 입력해주세요.");
                return false;
            }
            // 이름 유효성 검사
            let getYouName = RegExp(/^[가-힣]+$/);
            if(!getYouName.test($("#youName").val())){
                $("#youNameComment").text("이름은 한글만 사용 가능합니다.");
                $("youName").val("");
                return false;
            }

            // 비밀번호 공백 검사
            if($("#youPass").val() == ""){
                $("#youPassComment").text("비밀번호를 입력해주세요.");
                return false;
            }
            // 비밀번호 유효성 검사
            let getYouPass = $("#youPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩‘₩";:₩/?]/gi);
            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#youPassComment").text("8자리 ~ 20자리 이내로 입력해주세요~");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#youPassComment").text("비밀번호는 공백없이 입력해주세요!");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#youPassComment").text("영문, 숫자, 특수문자를 혼합하여 입력해주세요!");
                return false;
            }
            // 확인 비밀번호 공백 확인
            if($("#youPassC").val() == ""){
                $("#youPassCComment").text("확인 비밀번호를 입력해주세요!");
                return false;
            }
            // 비밀번호가 동일한지 체크
            if($("#youPassC").val() !== $("#youPassC").val()){
                $("#youPassCComment").text("비밀번호가 동일하지 않습니다.");
                return false;
            }

            // 휴대폰 번호 공백 확인
            if($("#youPhone").val() == ""){
                $("#youPhoneComment").text("올바른 휴대전화 번호(000-0000-0000)를 입력해주세요");
                return false;
            }
            // 휴대폰 번호 유효성 검사
            let getYouPhone = RegExp(/01[016789]-[^0][0-9]{2,3}-[0-9]{3,4}/);
            if(!getYouPhone.test($("#youPhone").val())){
                $("#youPhoneComment").text("휴대전화 번호가 정확하지 않습니다. 올바른 휴대전화 번호(000-0000-0000)를 입력해주세요!");
                $("#youPhone").val("");
                return false;
            }
        }
    </script>
</body>
</html>