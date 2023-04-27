<?php
  require "conf/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	  <title>Mini-Jeux</title>
	  <script src="https://cdn.jsdelivr.net/npm/brython@3/brython.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/brython@3/brython_stdlib.js"></script>

	  <!-- CSS  -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="css/materialize.css" type="text/css" rel="stylesheet" />
	  <link href="css/style.css" type="text/css" rel="stylesheet" />
	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
	  />
	  <link rel="stylesheet" href="css/animate.css">
</head>
<body onload="brython()">
	<?php
	  require "components/menueA.php"
	?>
	<h1 class="center">Bienvenue sur la page des mini-jeux</h1>
	<div class="container">
	    <div class="section">
	      <div class="row">
	        <div class="col s12 m12 l6 offset-l3">
	          <div class="icon-block">
	            <p class="light animate__animated animate__backInLeft wow">Vous allez, sur cette page, jouer à un mini jeux, un casse brique en python. Enjoy.</p>
	          </div>
	        </div>
	      </div>
	    </div>
	</div>

	<h2 class="center">Le casse brique</h2>
	<!-- implanter le jeu en python -->
	<h3 class="center">Comment jouer et les règles</h3>
	<div class="container">
	    <div class="section">
	      <div class="row">
	        <div class="col s12 m5 l5">
	            <p class="light animate__animated animate__backInLeft wow">Pour rapelle, le but du jeu est de casser toutes les briques présentes grâce à notre bille. Passons au règles du jeu.</p>
	        </div>
	        <div class="col s12 m5 offset-m2 l5 offset-l2">
	            <p class="light animate__animated animate__backInRight wow">Concernant les règles de jeux, vous devez déplacer le palet en bas afin de faire rebondir la balle dessus. Vous avez trois vie et en vous les perdez si la bille ne touche pas le palet en redescendant Si vous utilisez vos trois vie, vous perdez. Si toutes les cases sont cassées alors vous gagnez. Enjoy</p>
	          </div>
	      </div>
	    </div>
	</div>
<style>
* { padding: 0; margin: 0; }
canvas { background: #eee; display: block; margin: 0 auto; }
</style>

</head>
<body onload="brython()">

<tbody><tr>
<td id="right" style="padding:3%">
<canvas id="myCanvas" width="480" height="320"></canvas>
</td>
</tr>
</tbody></table>

<script type="text/python">
import math

from browser import document, bind, window

ballRadius = 10
paddleHeight = 10
paddleWidth = 75
brickRowCount = 5
brickColumnCount = 3
brickWidth = 75
brickHeight = 20
brickPadding = 10
brickOffsetTop = 30
brickOffsetLeft = 30

class Brick:

    def __init__(self):
        self.x = 0
        self.y = 0
        self.status = 1


class Panel:

    def __init__(self, canvas):
        self.ctx = canvas.getContext("2d")
        self.x = canvas.width / 2
        self.y = canvas.height - 30
        self.dx = 2
        self.dy = -2
        self.paddleX = (canvas.width - paddleWidth) / 2
        self.rightPressed = False
        self.leftPressed = False
        self.score = 0
        self.lives = 3
        self.bricks = [[Brick() for r in range(brickRowCount)]
          for _ in range(brickColumnCount)]

    def collisionDetection(self):
        for c in range(brickColumnCount):
            for r in range(brickRowCount):
                b = self.bricks[c][r]
                if b.status == 1:
                    if (self.x > b.x) and (self.x < b.x + brickWidth) \
                            and (self.y > b.y) \
                            and (self.y < b.y + brickHeight):
                        self.dy = -self.dy
                        b.status = 0;
                        self.score += 1
                        if self.score == brickRowCount * brickColumnCount:
                            window.alert("YOU WIN, CONGRATS!")
                            document.location.reload()

    def drawBall(self):
        ctx = self.ctx
        ctx.beginPath()
        ctx.arc(self.x, self.y, ballRadius, 0, math.pi * 2)
        ctx.fillStyle = "#0095DD"
        ctx.fill()
        ctx.closePath()

    def drawPaddle(self):
        ctx = self.ctx
        ctx.beginPath()
        ctx.rect(self.paddleX,
                 canvas.height - paddleHeight,
                 paddleWidth,
                 paddleHeight)
        ctx.fillStyle = "#0095DD"
        ctx.fill()
        ctx.closePath()

    def drawBricks(self):
        for c in range(brickColumnCount):
            for r in range(brickRowCount):
                if self.bricks[c][r].status == 1:
                    brickX = (r * (brickWidth + brickPadding)) + brickOffsetLeft
                    brickY = (c * (brickHeight + brickPadding)) + brickOffsetTop
                    self.bricks[c][r].x = brickX
                    self.bricks[c][r].y = brickY
                    ctx = self.ctx
                    ctx.beginPath()
                    ctx.rect(brickX, brickY, brickWidth, brickHeight)
                    ctx.fillStyle = "#0095DD"
                    ctx.fill()
                    ctx.closePath()

    def drawScore(self):
        self.ctx.font = "16px Arial"
        self.ctx.fillStyle = "#0095DD"
        self.ctx.fillText(f"Score: {self.score}", 8, 20)

    def drawLives(self):
        self.ctx.font = "16px Arial";
        self.ctx.fillStyle = "#0095DD";
        self.ctx.fillText(f"Lives: {self.lives}", canvas.width - 65, 20)

    def draw(self, *args):
        self.ctx.clearRect(0, 0, canvas.width, canvas.height)
        self.drawBricks()
        self.drawBall()
        self.drawPaddle()
        self.drawScore()
        self.drawLives()
        self.collisionDetection()
        if (self.x + self.dx > canvas.width-ballRadius) or \
                (self.x + self.dx < ballRadius):
            self.dx = -self.dx
        if self.y + self.dy < ballRadius:
            self.dy = -self.dy;
        elif self.y + self.dy > canvas.height-ballRadius:
            if (self.x > self.paddleX) \
                    and (self.x < self.paddleX + paddleWidth):
                self.dy = -self.dy
            else:
                self.lives -= 1
                if not self.lives:
                    window.alert("GAME OVER")
                    document.location.reload()
                else:
                    self.x = canvas.width / 2
                    self.y = canvas.height - 30
                    self.dx = 3
                    self.dy = -3
                    self.paddleX = (canvas.width - paddleWidth) / 2

        if self.rightPressed and (self.paddleX < canvas.width - paddleWidth):
            self.paddleX += 7
        elif self.leftPressed and self.paddleX > 0:
            self.paddleX -= 7
        self.x += self.dx
        self.y += self.dy
        window.requestAnimationFrame(self.draw)

canvas = document["myCanvas"]
panel = Panel(document["myCanvas"])

@bind(document, "keydown")
def keyDownHandler(e):
    if e.keyCode == 39:
        panel.rightPressed = True
    elif e.keyCode == 37:
        panel.leftPressed = True

@bind(document, "keyup")
def keyUpHandler(e):
    if e.keyCode == 39:
        panel.rightPressed = False
    elif e.keyCode == 37:
        panel.leftPressed = False

@bind(document, "mousemove")
def mouseMoveHandler(e):
    relativeX = e.clientX - canvas.offsetLeft
    if relativeX > 0 and relativeX < canvas.width:
        panel.paddleX = relativeX - paddleWidth / 2

# Associe la fonction panel.draw() au bouton "jouer"
document["play"].bind("click", panel.draw)
</script>
<div class="center">
    <button id="play">Cliquez ici pour jouer</button>
</div>


	<?php 
    require "components/footer.php"
    ?>

    <!--  Scripts-->
    
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script> new WOW().init();</script>
</body>
</html>