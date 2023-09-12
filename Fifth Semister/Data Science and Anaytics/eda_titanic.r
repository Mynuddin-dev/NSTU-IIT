getwd()
setwd("F:/IIT,BSSE/Fifth Semister/Data Science and Anaytics")
getwd()
test <- read.csv("test.csv")
train <- read.csv("train.csv")
train$Survived<-as.factor(train$Survived)
train$Pclass<-as.factor(train$Pclass)
#categorical data:Survived, Pclass, Name, Sex, Cabin, Ticket, Embarked  
#quantitative data:PassengerId, Age, SibSp, Parch,  Fare     
#Univariate non-graphical method:
## Categorical Data
##@Survived
train.survived <- as.matrix(summary(train$Survived))
train.survived<-cbind(train.survived,
                      train.survived/sum(train.survived))
##@Pclass
train.Pclass<- as.matrix(summary(train$Pclass))
train.Pclass<-cbind(train.Pclass,
                    train.Pclass/sum(train.Pclass))
##@Sex
train.Sex <- as.matrix(summary(train$Sex))
train.Sex<-cbind(train.Sex,
                 train.Sex/sum(train.Sex))
##@Cabin
train.Cabin <- as.matrix(summary(train$Cabin))
train.Cabin<-cbind(train.Cabin,
                              train.Cabin/sum(train.Cabin))
##@Ticket
train.Ticket<- as.matrix(summary(train$Ticket))
train.Ticket<-cbind(train.Ticket,
                                train.Ticket/sum(train.Ticket))
#Quantitative-data
#PassengerId
#Central Tendency
#Age
train.ageCT<-list(mean(train$Age,na.rm = TRUE),median(train$Age,na.rm = TRUE))
#SibSp
train.SibSpCT<-list(mean(train$SibSp,na.rm = TRUE),median(train$SibSp,na.rm = TRUE))
#Fare
train.FareCT<-list(mean(train$Fare,na.rm = TRUE),median(train$Fare,na.rm = TRUE))
#Central Tendency
#Spread
train.age.spreads<-list(var(train$Age,na.rm = TRUE),sqrt(var(train$Age,na.rm = TRUE)),boxplot(train$Age)$stats[4,1]-boxplot(train$Age)$stats[2,1])
train.SibSp.spreads <-list(var(train$SibSp,na.rm = TRUE),sqrt(var(train$SibSp,na.rm = TRUE)),boxplot(train$SibSp)$stats[4,1]-boxplot(train$SibSp)$stats[2,1])
train.Parch.spreads <-list(var(train$Parch,na.rm = TRUE),sqrt(var(train$Parch,na.rm = TRUE)),boxplot(train$Parch)$stats[4,1]-boxplot(train$Parch)$stats[2,1])
train.Fare.spreads <-list(var(train$Fare,na.rm = TRUE),sqrt(var(train$Fare,na.rm = TRUE)),boxplot(train$Fare)$stats[4,1]-boxplot(train$Fare)$stats[2,1])
#Spread
#Univariate graphical method
#Categorical Data
barplot(train.survived,beside = TRUE,names.arg =levels(train$Survived), xlab = 'Sex',ylab = '#Person')
barplot(train.Pclass,beside = TRUE,names.arg =levels(train$Pclass), xlab = 'PClass',ylab = '#Person')
#Quantitative Data
#Histogram
#Age
hist(na.omit(train$Age),main ='Histogram of Age',xlab = 'Age',ylab = 'Frequency')
#SibS
hist(na.omit(train$SibSp),main ='Histogram of SibSp',xlab = 'SibSp',ylab = 'Frequency')
#Parch
hist(na.omit(train$Parch),main ='Histogram of Parch',xlab = 'Parch',ylab = 'Frequency')
#Fare
hist(na.omit(train$Fare),main ='Histogram of Fare',xlab = 'Fare',ylab = 'Frequency')
#Histogram
#Boxplot
#Age
boxplot(na.omit(train$Age))
#SibSp
boxplot(na.omit(train$SibSp))
#Parch
boxplot(na.omit(train$Parch))
#Fare
boxplot(na.omit(train$Fare))
#Boxplot

