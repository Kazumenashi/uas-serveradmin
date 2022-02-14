pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
		docker stop trucorp-web-no2
                docker rm trucorp-web-no2
                docker build -t trucorp-web-2.0-no2 .
            }
        }
        stage('Run') {
            steps {
                docker run -dit --name trucorp-web-no2 --network uas-network -p 2002:80 trucorp-web-2.0-no2
            }
        }
    }
}