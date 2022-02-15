www.github.com (User:dcsbailey21574@gmail.com Pass:Sxxxxxxxxxx4)
dcsbailey21574@gmail.com
Sarsaiy21574
www.heroku.com (User:dcsbailey21574@gmail.com Pass:Sxxxxxxxxxx4)

1. git init (only first time)
2. git add .
3. git remote -v
4. git commit -m "aa"
5. git remote add origin  https://github.com/thejuly/updateWork_toAppSheet.git
6. git push -u origin  main

**7.** git remote remove origin (if necessary)
web page (heroku)
https://github.com/thejuly/googleSearch.git 

############################## Deploy directly to Heroku ##############################
1. Open cmd (command line)
2. git init
3. git add .
4. git commit -m "rev1"

5. heroku login
6. heroku apps:create my-thongpoon-sarsaiy-example
OR 6. heroku git:remote -a thejuly-mqtt
7. git push heroku master
8. heroku open -a customapplicationpdl
### heroku help ###

#############################
…or create a new repository on the command line
echo "# mqtt-sse" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/thejuly/mqtt-sse.git
git push -u origin main

###########################
…or push an existing repository from the command line
git remote add origin https://github.com/thejuly/mqtt-sse.git
git branch -M main
git push -u origin main

