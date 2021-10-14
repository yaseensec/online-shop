node{

    stage('SCM Checkout')
    {
        git credentialsId: 'dcc8ec86-ad93-40e1-89dc-22c22abc877e', url: 'https://github.com/yaseensec/online-shop.git'
    }
    
    stage('Run Docker Compose File')
    {
        sh 'docker-compose build'
        sh 'docker-compose up -d'
    }
  stage('PUSH image to Docker Hub')
    {
      /* withCredentials([string(credentialsId: 'DockerHubPassword', variable: 'DHPWD')]) 
        {
            sh "docker login -u yaseenins -p ${DHPWD}"
        }
        sh 'docker push vardhanns/phpmysql_app'
        */
        //docker.withRegistry( 'https://registry.hub.docker.com', 'DockerHubPassword' ) {
             
             sh 'docker login -u "yaseenins" -p "@Asur2021@" docker.io'
             sh 'docker push yaseenins/onlineshop'
             //sh 'docker push yaseenins/job1_web1.0'
             //sh 'docker push yaseenins/job1_web2.0'
            // sh 'docker push yaseenins/mysql'
          
    }
}
