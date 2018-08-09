rm -rf www/
mv craft craft-folder
cd craft-folder
mv web www
mv * .[^.]* ..
rm -rf craft-folder/