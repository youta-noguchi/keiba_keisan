<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>競馬確率計算マシーン</title>
  <style>
    @charset "UTF-8";
    body {
      margin: 0;
      padding: 0;
      color: #333;
      font-size: 14px;
    }
    .top {
      text-align: center;
    }
    .center {
      border: 1px solid;
      width: 60%;
      margin: 0 auto;
      padding: 0 15px;
      text-align: center;
    }
    table {
      margin: 0 auto;
    }
    .left {
      text-align: left;
      display: inline-block;
    }
    b {
      color: green;
    }
    .block {
      display: inline-block;
    }
    @media(max-width: 810px) {
      .center {
        width: 100%;
        border: none;
        border-top: 1px solid;
      }
      .block, input {
        display: block;
        text-align: left;
        margin-left: 30%;
      }
    }
  </style>
</head>
<body>
  <div class="top">
    <h1>競馬　点数・確率計算アプリ</h1>
    <sup>※確率については、馬のレベルを全て同じものとして計算しています。あくまで目安としてご参考にしてください。</sup><br>
    <sup>※確率が100%（ワイド・複勝は300%）を超えた場合、最大投票可能数を超えています。</sup>
  </div>

  <div class="center">
    <h2>掛け方の説明</h2>
    <div class="left">
        <p>・単勝</p>
        <p>&emsp; 一着になる馬を当てる</p>
        <p>・複勝</p>
        <p>&emsp;三着までに入る馬を当てる</p>
        <p>・ワイド</p>
        <p>&emsp; 三着までに入る2頭の馬を当てる</p>
        <p>・馬連</p>
        <p>&emsp; 順番は関係なく、選んだ二頭が一着・二着に入れば当たり</p>
        <p>・馬単</p>
        <p>&emsp; 着順も含めて、選んだ二頭が一着・二着に入れば当たり</p>
        <p>・三連複</p>
        <p>&emsp; 順番は関係なく、選んだ三頭が一着・二着・三着に入れば当たり</p>
        <p>・三連単</p>
        <p>&emsp; 着順も含めて、選んだ二頭が一着・二着・三着に入れば当たり</p>
    </div>
  </div>

  <div class="center">
    <h2>通常</h2>
    <form method="post" action="index.php">
      <div class="block">
        <label>頭数</label>
        <select name="kazu">
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
        </select>
      </div>
      <div class="block">
        <label>賭け方</label>
        <select name="type">
          <option value="単勝">単勝</option>
          <option value="複勝">複勝</option>
          <option value="ワイド">ワイド</option>
          <option value="馬連">馬連</option>
          <option value="馬単">馬単</option>
          <option value="三連複">三連複</option>
          <option value="三連単">三連単</option>
        </select>
      </div>
      <div class="block">
        <label>点数</label>
        <select name="tensu">
          <?php for($i = 1; $i <= 100 ; $i++): ?>
          <option><?php echo $i; ?></option>
          <?php endfor; ?>
        </select>
      </div>
      <input type="submit" value="計算する">
    </form>
    <br>
    <b><?php require_once('keisan.php'); ?></b>
  </div>

  <div class="center">
    <h2>ボックス賭け(3〜10頭ボックス)</h2>
    <form method="post" action="index.php">
      <div class="block">
        <label>頭数</label>
        <select name="kazu_box">
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
        </select>
      </div>
      <div class="block">
        <label>ボックス</label>
        <select name="box">
          <option value="3">3頭ボックス</option>
          <option value="4">4頭ボックス</option>
          <option value="5">5頭ボックス</option>
          <option value="6">6頭ボックス</option>
          <option value="7">7頭ボックス</option>
          <option value="8">8頭ボックス</option>
          <option value="9">9頭ボックス</option>
          <option value="10">10頭ボックス</option>
        </select>
      </div>
      <div class="block">
        <label>掛け方</label>
        <select name="type_box">
          <option value="ワイド">ワイド</option>
          <option value="馬連">馬連</option>
          <option value="馬単">馬単</option>
          <option value="三連複">三連複</option>
          <option value="三連単">三連単</option>
        </select>
      </div>
      <input type="submit" value="計算する">
    </form>
    <br>
    <b><?php require_once('keisan_box.php'); ?></b>
  </div>

  <div class="center">
    <h2>フォーメーション</h2>
    <sup>※三連複フォーメーションは調整中</sup><br>
    <sup>※点数が０点の場合は計算されません。</sup>
    <form method="post" action="index.php">
      <div class="block">
        <label>頭数</label>
        <select name="kazu_formation">
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
        </select>
      </div>
      <div class="block">
        <label>掛け方</label>
        <select name="type_formation">
          <option value="馬連">馬連</option>
          <option value="馬単">馬単</option>
          <option value="三連単">三連単</option>
        </select>
      </div>
      <input type="submit" value="計算する">
      <table border="1">
        <tr>
          <th>馬番</th>
          <th>1</th>
          <th>2</th>
          <th>3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>10</th>
          <th>11</th>
          <th>12</th>
          <th>13</th>
          <th>14</th>
          <th>15</th>
          <th>16</th>
          <th>17</th>
          <th>18</th>
        </tr>
        <tr>
          <td>一着目、一頭目</td>
          <td><input type="checkbox" name="ichi[]" value="1"></td>
          <td><input type="checkbox" name="ichi[]" value="2"></td>
          <td><input type="checkbox" name="ichi[]" value="3"></td>
          <td><input type="checkbox" name="ichi[]" value="4"></td>
          <td><input type="checkbox" name="ichi[]" value="5"></td>
          <td><input type="checkbox" name="ichi[]" value="6"></td>
          <td><input type="checkbox" name="ichi[]" value="7"></td>
          <td><input type="checkbox" name="ichi[]" value="8"></td>
          <td><input type="checkbox" name="ichi[]" value="9"></td>
          <td><input type="checkbox" name="ichi[]" value="10"></td>
          <td><input type="checkbox" name="ichi[]" value="11"></td>
          <td><input type="checkbox" name="ichi[]" value="12"></td>
          <td><input type="checkbox" name="ichi[]" value="13"></td>
          <td><input type="checkbox" name="ichi[]" value="14"></td>
          <td><input type="checkbox" name="ichi[]" value="15"></td>
          <td><input type="checkbox" name="ichi[]" value="16"></td>
          <td><input type="checkbox" name="ichi[]" value="17"></td>
          <td><input type="checkbox" name="ichi[]" value="18"></td>
        </tr>
        <tr>
          <td>二着目、二頭目</td>
          <td><input type="checkbox" name="ni[]" value="1"></td>
          <td><input type="checkbox" name="ni[]" value="2"></td>
          <td><input type="checkbox" name="ni[]" value="3"></td>
          <td><input type="checkbox" name="ni[]" value="4"></td>
          <td><input type="checkbox" name="ni[]" value="5"></td>
          <td><input type="checkbox" name="ni[]" value="6"></td>
          <td><input type="checkbox" name="ni[]" value="7"></td>
          <td><input type="checkbox" name="ni[]" value="8"></td>
          <td><input type="checkbox" name="ni[]" value="9"></td>
          <td><input type="checkbox" name="ni[]" value="10"></td>
          <td><input type="checkbox" name="ni[]" value="11"></td>
          <td><input type="checkbox" name="ni[]" value="12"></td>
          <td><input type="checkbox" name="ni[]" value="13"></td>
          <td><input type="checkbox" name="ni[]" value="14"></td>
          <td><input type="checkbox" name="ni[]" value="15"></td>
          <td><input type="checkbox" name="ni[]" value="16"></td>
          <td><input type="checkbox" name="ni[]" value="17"></td>
          <td><input type="checkbox" name="ni[]" value="18"></td>
        </tr>
        <tr>
          <td>三着目、三頭目</td>
          <td><input type="checkbox" name="san[]" value="1"></td>
          <td><input type="checkbox" name="san[]" value="2"></td>
          <td><input type="checkbox" name="san[]" value="3"></td>
          <td><input type="checkbox" name="san[]" value="4"></td>
          <td><input type="checkbox" name="san[]" value="5"></td>
          <td><input type="checkbox" name="san[]" value="6"></td>
          <td><input type="checkbox" name="san[]" value="7"></td>
          <td><input type="checkbox" name="san[]" value="8"></td>
          <td><input type="checkbox" name="san[]" value="9"></td>
          <td><input type="checkbox" name="san[]" value="10"></td>
          <td><input type="checkbox" name="san[]" value="11"></td>
          <td><input type="checkbox" name="san[]" value="12"></td>
          <td><input type="checkbox" name="san[]" value="13"></td>
          <td><input type="checkbox" name="san[]" value="14"></td>
          <td><input type="checkbox" name="san[]" value="15"></td>
          <td><input type="checkbox" name="san[]" value="16"></td>
          <td><input type="checkbox" name="san[]" value="17"></td>
          <td><input type="checkbox" name="san[]" value="18"></td>
        </tr>
      </table>
    </form>
    <br>
    <b><?php require_once('keisan_formation.php'); ?></b>
  </div>

  <div class="center">
    <h2>流し</h2>
    <sup>※軸2頭の場合相手は16頭までです。</sup><br>
    <form method="post" action="index.php">
      <div class="block">
        <label>頭数</label>
        <select name="kazu_nagashi">
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
        </select>
      </div>
      <div class="block">
        <label>掛け方</label>
        <select name="nagashi">
          <option>ワイド</option>
          <option>馬連</option>
          <option>馬単</option>
          <option>馬単マルチ</option>
          <option>三連複軸1頭</option>
          <option>三連複軸2頭</option>
          <option>三連単軸1頭</option>
          <option>三連単軸1頭マルチ</option>
          <option>三連単軸2頭</option>
          <option>三連単軸2頭マルチ</option>
        </select>
      </div>
      <div class="block">
        <label>相手</label>
        <select name="aite">
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
        </select>
      </div>
      <input type="submit" value="計算する">
    </form>
    <br>
    <b><?php require_once('keisan_nagashi.php'); ?></b>
  <div>


</body>
</html>
