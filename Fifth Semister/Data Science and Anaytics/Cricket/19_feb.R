cricket_match_files <- list.files(getwd(),pattern = ".yaml$")

file_name <- c();  match_date <- c(); toss<-c();
decision<- c();f_inns<-c();s_inns<-c();f_inns_total<- c();f_inns_extras<-c(); 
f_inns_x4s<-c(); f_inns_x6s<-c();s_inns_total<-c();s_inns_extras<-c(); 
s_inns_x4s<-c();s_inns_x6s<-c();out_come_by<-c(); out_come_margin<-c(); 
winner<-c();
for (cricket_match_file in cricket_match_files) {
  cricket_match<- yaml::read_yaml(cricket_match_file)
  # file_name, team1, team2, match_date,toss 
  file_name<- c(file_name, cricket_match_file)
  if (length(cricket_match$info$dates)==1) {
     match_date <- c(match_date, cricket_match$info$dates)
  }
  else {
    match_date <- c(match_date, cricket_match$info$dates[1])
  }
  teams<- c(cricket_match$info$teams)
  toss<-  c(toss, cricket_match$info$toss$winner)
  decision<-  c(decision, cricket_match$info$toss$decision)
  bits<-0
  if (cricket_match$info$toss$winner==teams[1]) {
    bits<- bits+ 0
  }
  else{
    bits<- bits+1
  }
  if (cricket_match$info$toss$decision=="bat") {
    bits<- bits+ 0
  }
  else{
    bits<- bits+1
  }
  f_inns <- c(f_inns, teams[1+(bits%%2)])
  s_inns <- c(s_inns, teams[2-(bits%%2)])
  # 1st innings runs #
  # f_inns_total,f_inns_extras, f_inns_x4s,f_inns_x6s
  total <- 0
  extras<- 0
  x4s<-0
  x6s<-0
  if (length(cricket_match$innings)==2) {
    for (i in c(1:length(cricket_match$innings[[1]]$`1st innings`$deliveries))) {
      total<- total+ (cricket_match$innings[[1]]$`1st innings`$deliveries[[i]][[1]]$runs$total)
      extras<- extras+ (cricket_match$innings[[1]]$`1st innings`$deliveries[[i]][[1]]$runs$extras)
      run <- cricket_match$innings[[1]]$`1st innings`$deliveries[[i]][[1]]$runs$batsman
      if (run==4) {
        x4s<- x4s+1
      }
      if (run==6) {
        x6s<- x6s+1
      }
    } 
  }
  
  f_inns_total <- c( f_inns_total, total)
  f_inns_x4s<-c(f_inns_x4s,x4s)
  f_inns_x6s<- c(f_inns_x6s, x6s)
  f_inns_extras<-c( f_inns_extras, extras)
  # 1st innings runs #
  # 2nd innings runs #
  # s_inns_total,s_inns_extras, s_inns_x4s,s_inns_x6s
  total <- 0
  extras<- 0
  x4s<-0
  x6s<-0
  if (length(cricket_match$innings)==2) {
    for (i in c(1:length(cricket_match$innings[[2]]$`2nd innings`$deliveries))) {
      total<- total+ (cricket_match$innings[[2]]$`2nd innings`$deliveries[[i]][[1]]$runs$total)
      extras<- extras+ (cricket_match$innings[[2]]$`2nd innings`$deliveries[[i]][[1]]$runs$extras)
      run <- cricket_match$innings[[2]]$`2nd innings`$deliveries[[i]][[1]]$runs$batsman
      
      if (run==4) {
        x4s<- x4s+1
      }
      if (run==6) {
        x6s<- x6s+1
      }
    }
  }
  s_inns_total <- c( s_inns_total, total)
  s_inns_x4s<-c(s_inns_x4s,x4s)
  s_inns_x6s<- c(s_inns_x6s, x6s)
  s_inns_extras<-c(s_inns_extras, extras)
  # 2nd innings runs #
  # out_come_by, out_come_margin, winner 
  if (length(names(cricket_match$info$outcome$by))==1) {
    out_come_by <- c(out_come_by, names(cricket_match$info$outcome$by)[1])
    out_come_margin<- c(out_come_margin, cricket_match$info$outcome$by[[1]])
  }else{
    out_come_by <- c(out_come_by, "UKNWN")
    out_come_margin <- c(out_come_margin, "UKNWN")
  }
  if (length(cricket_match$info$outcome$winner)==1) {
    winner <- c(winner, cricket_match$info$outcome$winner)
  }else {
    winner <- c(winner, "NN")
  }
}
toss<- as.factor(toss)
decision<- as.factor(decision)
f_inns<-as.factor(f_inns)
s_inns<-as.factor(s_inns)
out_come_by<- as.factor(out_come_by)
winner<- as.factor(winner)

cricket_data <- data.frame(file_name, f_inns, s_inns, match_date, toss, decision,
                           f_inns_total, f_inns_extras,f_inns_x4s, 
                           f_inns_x6s, s_inns_total, s_inns_extras,
                           s_inns_x4s, s_inns_x6s, out_come_by, out_come_margin, winner)
write.csv(x=cricket_data, file = "cric_data.csv")
