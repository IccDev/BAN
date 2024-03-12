# BAN
php -S localhost:8000

# Build Container  
docker compose build
docker tag 2ef3fd49ead4 iccbrx/ban:latest
docker push iccbrx/ban:latest