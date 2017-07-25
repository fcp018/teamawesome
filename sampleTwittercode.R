library("rtweet")

test_data <- search_tweets(q= '#rstats',
                            n = 100,
                            usr = T)
test_users <- users_data(test_data)
