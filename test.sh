"C:\Program Files\Git\bin\bash.exe" --login -i "C:\Program Files\Docker Toolbox\start.sh" docker build -t python-program .
truncate -s 0 console.log
docker run python-program >> console.log 