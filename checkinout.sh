#!/usr/bin/env bash

echo "Place your tag:"

api_url=$(cat /bin/config_api_url)

while read tag; do
    echo "     Received id: $tag"
    curl -i -m 5 "https://$api_url?inklokken=$tag"	
done 
