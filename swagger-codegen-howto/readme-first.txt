1. Download current stable 3.x.x branch (OpenAPI version 3)
wget https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/3.0.35/swagger-codegen-cli-3.0.35.jar -O swagger-codegen-cli.jar

2. run this command

java -jar modules/swagger-codegen-cli/target/swagger-codegen-cli.jar generate    -i /path/to/api-description/openapi.json -l php -o /output directory/caelum-php-client --git-user-id=GRG-Professional-Services --git-repo-id=caelum-php-client -c /path/to/CaelumPhpSwaggerConfig.json

after generation complete rename subdirectory SwaggerClient-php to caelum-php-client and move into git-repository