library(RMySQL)

args <- commandArgs(TRUE)
N <- args[1]

mydb = dbConnect(MySQL(), user='root', password='', dbname='recommender_data', host='localhost')
dbListTables(mydb)
N <- 'A3AICCCK8VX8Y1'
query <- sprintf("select * from rating where user_id='%s'",N)
rs = dbSendQuery(mydb, query)
data = fetch(rs, n=-1)
print(data)