args <- commandArgs(TRUE)
 
N <- args[1]
x <- rnorm(N,0,1)
 
png(filename="C:/xampp/htdocs/recommender/temp.png", width=500, height=500)
hist(x, col="lightblue")
dev.off()