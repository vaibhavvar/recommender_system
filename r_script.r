library(RMySQL)
library("neuralnet")

net.course <- readRDS("C:/xampp/htdocs/recommend3/trained_data.rds")

args <- commandArgs(TRUE)
N <- args[1]
print(N)
#N <- 'ayush.123.007@gmail.com'

mydb = dbConnect(MySQL(), user='root', password='', dbname='recommender', host='localhost')
#query <- sprintf("select english,hindi,science,socialsc,maths,ART,HIN,GEO,ELE,ACC,BAN,PTG1,POC,SPB,PYY,SPM,CHE,MTT,FTW,ISE,AOD,HIS,ZLG,WDG,TDG,GPY,BTY,EDG,ACT,ECO,MET,DAB,SUR,PHY,SOH,APY,EGL,GSC,SOA,PHS1,AMS,VTS,CEG,MEG,MAT,SOM,PHS2,HSC,GTY,MTS,ETR,MIT,RTE,CPM,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,oft,ofu,ugm,MI,BI,CI,HI,Neuro,Extra,PCM,PCB,COM,HUM from academic,opted,score,question,personality where academic.user='%s' and opted.user='%s' and score.user='%s' and question.user= '%s' and personality.user='%s'",N,N,N,N,N)
fetch_query <- sprintf("select english,hindi,science,socialsc,maths,percent,MI,BI,CI,HI,Neuro,Extra from academic,score where academic.user='%s' and score.user='%s'",N,N)


rs = dbSendQuery(mydb, fetch_query)
test_data = as.data.frame (fetch(rs, n=-1))

colnames(test_data) <- c("English","Hindi","Science","Social_Science","Maths","Present_Score","MI","BI","CI","HI","Neuroticism","Extraversion")

#test_data_raw <- test_data [,c("English","Hindi","Science","Social_Science","Maths","Present_Score","MI","BI","CI","HI","Neuroticism","Extraversion")]
test_data_raw <- as.numeric(test_data)
test_data_raw <- as.data.frame(t(test_data_raw))

#colnames(test_data) <- c("English","Hindi","Science","Social_Science","Maths","Present_Score","MI","BI","CI","HI","Neuroticism","Extraversion")
#test_data <-  test_data [,c("English","Hindi","Science","Social_Science","Maths","Present_Score","MI","BI","CI","HI","Neuroticism","Extraversion")]
#trainingdata[keep, drop=FALSE]

net.results <- compute(net.course, test_data_raw) #Run them through the neural network

#Lets see what properties net.sqrt has
ls(net.results)

#Lets see the results
print(net.results$net.result)

result <- as.data.frame(net.results$net.result)
colnames(result) <- c("p","b","c","h")

insert_query <- sprintf("insert into output (user,pcm,pcb,co,hu) values ('%s',%f,%f,%f,%f)",N,result[1],result[2],result[3],result[4])
rs <- dbSendQuery(mydb, insert_query)
dbClearResult(rs)