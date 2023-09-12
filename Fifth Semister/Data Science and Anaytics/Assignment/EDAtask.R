getwd()
setwd("F:/IIT,BSSE/Fifth Semister/Data Science and Anaytics")
getwd()
test <- read.csv("test.csv")
train <- read.csv("train.csv")

head(test)
head(train)
#Taking care of missing value
nlTrainNA = sapply( train, function(x) switch( class(x), factor = sum(x==""), sum( is.na(x) ) ) );
tTrainNA = t(nlTrainNA);                                        # transpose named list
dfTrainNA = data.frame( tTrainNA );                             # convert to dataframe

train$Age = ifelse(is.na(train$Age),
                     ave(train$Age, FUN = function(x) mean(x,na.rm=TRUE)),
                     train$Age)

#i cant taking care of missing data which value is string which i can that is bellow
#train$Embarked[train$Embarked==""]="C"

#Variale feature
ggplot(train, aes(x = factor(Pclass), fill = factor(Pclass))) +
    geom_bar( show.legend=FALSE) +
    xlab("Pclass") +
    ylab("Total Count")
    

library(ggplot2)
ggplot(train, aes(x = factor(Pclass), fill = factor(Survived))) +
    geom_bar(width = 0.5, position="dodge") +
    xlab("Pclass") +
    ylab("Total Count") +
    labs(fill = "Survived")
head(as.character(train$Name),n=20);
#sex
ggplot(train, aes(x = factor(Sex), fill = factor(Sex))) +
    geom_bar( show.legend=TRUE) +
    xlab("Sex") +
    ylab("Total Count")
#sex
ggplot(train, aes(x = factor(Sex), fill = factor(Survived))) +
    geom_bar(width = 0.5, position="dodge") +
    xlab("Sex") +
    ylab("Total Count") +
    labs(fill = "Survived")
#Age
ggplot(subset(train, !is.na(Age)), aes(x = Age)) +
    geom_histogram(binwidth=4) +
    xlab("Age") +
    ylab("Total Count");
#Age
ggplot(subset(train,!is.na(Age)), aes(y=Age,x="")) + geom_boxplot();
#Age is a predictor of Survivality
ggplot(subset(train,!is.na(Age)), aes(x = Age, fill = factor(Survived))) +
    geom_density( position="stack") +
    xlab("Age") +
    ylab("Total Count") +
    labs(fill = "Survived")
#SibSp
ggplot(train, aes(x = SibSp )) +
    geom_histogram(binwidth=0.5) +
    xlab("Number of Siblings/Spouses") +
    ylab("Total Count")

ggplot(train, aes(x = SibSp, fill = factor(Survived))) +
    geom_histogram(binwidth=0.5, position="dodge") +
    xlab("Number of Siblings/Spouses") +
    ylab("Total Count") +
    labs(fill = "Survived")
#Paech
ggplot(train, aes(x = Parch )) +
    geom_histogram(binwidth=0.5) +
    xlab("Number of Parents/Children") +
    ylab("Total Count")


ggplot(train, aes(x = Parch, fill = factor(Survived))) +
    geom_histogram(binwidth=0.5, position="dodge") +
    xlab("Number of Parents/Children") +
    ylab("Total Count") +
    labs(fill = "Survived")

head(as.character(train$Ticket),n=20);
#Fare
ggplot(train, aes(x = Fare)) +
    geom_histogram(binwidth=4) +
    xlab("Fare") +
    ylab("Total Count");
ggplot(train, aes(y=Fare,x="")) + geom_boxplot();
ggplot(train, aes(x = Fare, fill = factor(Survived))) +
    geom_density( position="stack") +
    xlab("Fare") +
    ylab("Total Count") +
    labs(fill = "Survived")
#cabin
levels(train$Cabin)


getwd()











install.packages("ggplot2")
library(ggplot2)
install.packages("dplyr")
library(dplyr)
install.packages("GGally")
library(GGally)
install.packages("rpart")
library(rpart)
install.packages("rpart.plot")
library(rpart.plot)
install.packages("randomForest")
library(randomForest)
