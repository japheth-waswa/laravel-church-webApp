-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 02:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `author_name` text COLLATE utf8mb4_unicode_ci,
  `author_image_url` text COLLATE utf8mb4_unicode_ci,
  `publish_date` timestamp NULL DEFAULT NULL,
  `blog_category_id` int(11) NOT NULL DEFAULT '0',
  `author_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `url_key`, `image_url`, `brief_description`, `content`, `author_name`, `author_image_url`, `publish_date`, `blog_category_id`, `author_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'What Worshippers Need to Know About Ourselves and About Jesus', 'what-worshippers-need-to-know-about-ourselves-and-about-jesus', 'assets/uploads/images/143174913.jpg', 'All we like sheep have gone astray; we have turned – every one – to his own way; and the LORD has laid on him the iniquity of us all.', '<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/holy-spirit-and-worship.jpg" style="height:376px; width:600px" /></p>\r\n\r\n<p style="text-align:start">All we like sheep have gone astray; we have turned &ndash; every one &ndash; to his own way; and the LORD has laid on him the iniquity of us all. <em>&nbsp;</em>(Isaiah 53:6)</p>\r\n\r\n<p style="text-align:start">Palm Sunday tells us about the praise of people who had a severely limited knowledge of Jesus.&nbsp; Matthew records that when Jesus came into Jerusalem &ldquo;the whole city was stirred up&rdquo; (Mat. 21:10).&nbsp; That&rsquo;s hardly surprising. &nbsp;Jesus had given the greatest teaching that they had ever heard and he had performed the greatest miracles that they had ever seen.</p>\r\n\r\n<p style="text-align:start">So people said, &ldquo;Who is this?&rdquo; (21:10), and the crowds said, &ldquo;This is the prophet Jesus, from Nazareth of Galilee&rdquo; (21:11).&nbsp; It is true.&nbsp; Jesus is a prophet.&nbsp; But that doesn&rsquo;t go far enough.&nbsp; Jesus is more than a prophet.&nbsp; He is the One about whom the prophets spoke, the One to whom all of them pointed.&nbsp; Jesus is Prophet, Priest, King, Savior, and Lord.</p>\r\n\r\n<p style="text-align:start">Jesus himself tells us that God is seeking worshippers who will worship him in spirit and in truth: &ldquo;True worshippers will worship the Father in spirit and truth, for the Father is seeking such people to worship him&rdquo; (John 4:23)</p>\r\n\r\n<p style="text-align:start">To worship in &lsquo;truth&rsquo; means to worship God knowing who he is and knowing who we are.&nbsp; Without knowing these two things, worship is worthless, and it may actually be worse than that.&nbsp; It quickly slides into an exercise in self-deception.</p>', 'Carol Mathews', NULL, '2017-05-16 21:00:00', 2, 0, 1, '2017-07-04 09:15:06', '2017-07-04 09:15:06', NULL),
(4, 'Breakfast with the Devil, Supper with the Savior', 'breakfast-with-the-devil-supper-with-the-savior', 'assets/uploads/images/327663845.jpg', 'One of the criminals who hung there hurled insults at him: ‘Aren’t you the Christ? Save yourself and us!', '<p style="text-align:start">One of the criminals who hung there hurled insults at him: &lsquo;Aren&rsquo;t you the Christ? Save yourself and us!&rsquo; (Luke 23:39)<img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/holy-spirit-power.jpg" style="height:360px; width:680px" /></p>\r\n\r\n<p style="text-align:start">Here is a man in the last hours of his life. He is completely lost, he is completely helpless, and he is <em>still</em> angry with God.</p>\r\n\r\n<p style="text-align:start">Suffering doesn&rsquo;t always make people more tender. It can bring out the worst in us.</p>\r\n\r\n<p style="text-align:start">Sometimes pain intensifies a sinner&rsquo;s hatred towards God. You can feel this man&rsquo;s hostility towards the Son of God: &ldquo;If you&rsquo;re God, why don&rsquo;t you do something?&rdquo;</p>\r\n\r\n<p style="text-align:start">Do not underestimate how much the human heart hates God. The Scriptures tell us about the last day when God&rsquo;s judgments are poured out. What do we find on that day? Do we find sinners repenting? No, the Bible tells us that people will call on the rocks to fall on them (Revelation 6:16), &ldquo;We&rsquo;d rather die than bow before you!&rdquo;</p>\r\n\r\n<p style="text-align:start">Sin is a mighty power that grips the human soul. Apart from the grace of Christ, none of us will ever get free from it. This man was just hours away from eternity. Having given himself to a life of crime, he was now under the judgment of the law. Soon he would face the judgment of God and still he is raging against God. It is the story of his life.</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">Then something changed</h2>\r\n\r\n<p style="text-align:start">His partner is crime is on the other side of Jesus in exactly the same position. This man also pours out insults on Jesus, but then something changes. A silence comes over his soul, and perhaps for the first time in his life, he really thinks about his own position.</p>\r\n\r\n<p style="text-align:start">He had skimmed through life, lived by his wits, drifted from one thing to another, but now his life is slipping away. Earth is receding and eternity is beginning to loom large. It&rsquo;s right on the horizon. He had not planned on this and he had not prepared for it either.</p>\r\n\r\n<p style="text-align:start">As a Jew, he&rsquo;d always believed in God, but it never made any difference to his life. Now he sees with awesome clarity that before the day is done, he&rsquo;ll stand in the presence of the God he is cursing, and he&rsquo;ll be held accountable for the stewardship of his whole life.</p>\r\n\r\n<p style="text-align:start">As these thoughts run through his mind, he hears the distant voice of his friend, still cursing and hurling abuse at Jesus and he says, &ldquo;Don&rsquo;t you fear God?&rdquo; (Luke 23:42).</p>\r\n\r\n<p style="text-align:start">Can you imagine this moment? Then he says to Jesus, &ldquo;Remember me when you come into your kingdom&rdquo; (23:42). And Jesus said to him, &ldquo;I tell you the truth, today you will be with me in paradise (Luke 23:43).</p>\r\n\r\n<p style="text-align:start">It&rsquo;s an extraordinary story&mdash;a man who&rsquo;s destined for hell and right on the brink of eternal destruction is given full access to the joys and privileges of eternal life with Jesus Christ. Our aim in the series is to explore the full extent of Christ&rsquo;s love. John Owen says,</p>\r\n\r\n<p style="text-align:start">Having a loving fellowship with the Father is very much neglected by Christians&hellip; This makes Christian sad when they might be rejoicing. It makes them weak when they could be strong. How few Christians are actually acquainted with this great privilege of having a loving fellowship with the Father&hellip;<a href="http://unlockingthebible.org/sermon/breakfast-with-the-devil-supper-with-the-savior/#_ftn1" name="_ftnref1" style="box-sizing: border-box; background: transparent; color: rgb(78, 49, 118); text-decoration: none; font-family: &quot;Open Sans Light&quot;, sans-serif;">[1]</a></p>\r\n\r\n<p style="text-align:start">We desperately need to grasp the extent of Christ&rsquo;s love, because without this you&rsquo;ll be sad when you could be rejoicing, without this you&rsquo;ll be weak when you could be strong.</p>\r\n\r\n<p style="text-align:start">How is God&rsquo;s love mde known to us and lavished upon us? In Jesus Christ, and that&rsquo;s why we&rsquo;re giving ourselves to this sustained meditation on the extent of his love. The more you see of God&rsquo;s love for you, the more you will grow in your own love for him. Today I want to offer, from this story in Luke 23&hellip;</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h1 style="text-align:start">Seven Glimpses of the Love of Christ</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">1. Christ chooses the company of undeserving sinners</h2>\r\n\r\n<p style="text-align:start">Who would you like to have beside you in the last moments of your life? I would like to think that my wife, Karen, would be there, my two sons and my two daughters-in-law. I&rsquo;d like to have people who love me around at the last moments of my life.</p>\r\n\r\n<p style="text-align:start">These are the last moments of Jesus&rsquo; life on earth. He&rsquo;s about to go into death and eternity. We know that Mary the mother of Jesus stood at the cross, with John the apostle and some other women. But the people who are closest to Jesus in these last hours of agony are two men who hate him. They are hurling abuse at him.</p>\r\n\r\n<p style="text-align:start">Christ is in the company of sinners again. They called him the &ldquo;friend of sinners.&rdquo; This was meant as a slur, but it is a glorious title, &ldquo;It is not the healthy who need a doctor, but the sick. I have not come to call the righteous, but sinners to repentance&rdquo; (Luke 5:31-32).</p>\r\n\r\n<p style="text-align:start">One of the sinners has a change of heart, and right there on the cross Christ saves him.</p>\r\n\r\n<p style="text-align:start">Spurgeon says this man was our Lord&rsquo;s last companion on earth and his first companion in heaven. <a href="http://unlockingthebible.org/sermon/breakfast-with-the-devil-supper-with-the-savior/#_ftn2" name="_ftnref2" style="box-sizing: border-box; background: transparent; color: rgb(78, 49, 118); text-decoration: none; font-family: &quot;Open Sans Light&quot;, sans-serif;">[2]</a> Jesus chooses surprising friends, doesn&rsquo;t he? &ldquo;When the Lord Jesus made a friend of me,&rdquo; Spurgeon says, &ldquo;He certainly did not make a choice that brought him credit.&rdquo; Don&rsquo;t you feel that way too?</p>\r\n\r\n<p style="text-align:start">Christ is ministering, even in his agony, to this wretched man who&rsquo;d wasted his life and only moments ago was abusing him. Now Christ makes this man his friend! He says to him, &ldquo;Today you will be with me in paradise. I&rsquo;m going to make you my friend.&rdquo; Do you see the love of Christ here? Spurgeon pictures Christ entering the glory of heaven,</p>\r\n\r\n<p style="text-align:start">Who is this that enters the pearly gate at the same moment as the King of glory? Who is this favored companion of the Redeemer? Is it some honored martyr? Is it a faithful apostle? Is it a patriarch like Abraham or a prince like David? It is none of these. Behold and be amazed at sovereign grace&hellip;<a href="http://unlockingthebible.org/sermon/breakfast-with-the-devil-supper-with-the-savior/#_ftn3" name="_ftnref3" style="box-sizing: border-box; background: transparent; color: rgb(78, 49, 118); text-decoration: none; font-family: &quot;Open Sans Light&quot;, sans-serif;">[3]</a></p>\r\n\r\n<p style="text-align:start">A notorious sinner on the brink of hell is swept into the glory of heaven. We might ask, &ldquo;Lord, why him? Isn&rsquo;t there someone better suited to be your first companion in heaven?&rdquo; This man is a sample of what Christ can do. The first man in heaven has absolutely nothing to commend him.</p>\r\n\r\n<p style="text-align:start">Christ is glorified by saving this man in this way because it&rsquo;s clear that his salvation is through Christ alone. His salvation opens the door of hope for all of us, because if this man can become the companion of Christ in heaven, then there&rsquo;s hope for you and for every person you&rsquo;ll ever meet. Do you see the love of Christ in this?</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">2. Christ accepts the simplest faith</h2>\r\n\r\n<p style="text-align:start">Here is a man who has pursued a life of crime. He is full of cursing and anger against God, but then something changes in his soul. What happens?</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">a. He begins to fear God</h3>\r\n\r\n<p style="text-align:start">&ldquo;Don&rsquo;t you fear God?&rdquo; (Luke 23:40), he said to his friend.</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">b. He recognizes his sinful condition</h3>\r\n\r\n<p style="text-align:start">We are punished justly, for &ldquo;we are getting what our deeds deserve&rdquo; (Luke 23:41). There are no more evasions, no more excuses.</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">c. He believed in the Lord Jesus Christ</h3>\r\n\r\n<p style="text-align:start">&ldquo;Jesus, remember me when you come into your kingdom&rdquo; (Luke 23:42). He sees in Christ the authority of a king. How did he come to that? The sign above Jesus head said, &ldquo;This is the King of the Jews.&rdquo; And the crowd was saying, &ldquo;He saved others&hellip;&rdquo; Perhaps he thought, &ldquo;This man saved others? Maybe he can save me.&rdquo;</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">d. He asked Jesus to save him</h3>\r\n\r\n<p style="text-align:start">&ldquo;Jesus, remember me when you come into your kingdom&rdquo; (Luke 23:42). Was there ever anything simpler than that? He believed Jesus with the least bit of revelation and then asked him to save him&hellip;</p>\r\n\r\n<p style="text-align:start">&ldquo;I am tired of the wreckage I have made of my life and my terrible end. If there is any possibility of something better beyond this life then, please, in your mercy, let me be part of it.&rdquo; And Jesus saves this man on the spot, &ldquo;Today you will be with me in paradise.&rdquo; You really cannot get a simpler faith than that.</p>\r\n\r\n<p style="text-align:start">We live in a skeptical age when questioning shows that you are sophisticated, and</p>\r\n\r\n<p style="text-align:start">clarity suggests that you must be na&iuml;ve. In that environment, the world wants to present to us a faith that is a long and complex journey. But listen to these words of Jesus, &ldquo;I praise you, Father&hellip; because you have hidden these things from the wise and learned, and revealed them to little children&rdquo; (Matt. 11:25).</p>\r\n\r\n<p style="text-align:start">You can pursue spirituality all your life, but apart from Jesus Christ, you will never come to know God. All things have been committed by the Father to the Son. Jesus does not say, &ldquo;Go on a long search.&rdquo; He says, &ldquo;Come to me&hellip;&rdquo; (Matt. 11:27-28), &ldquo;and I will give you rest for your soul.&rdquo; Do you see the love of Christ in this? If it took a <em>PhD</em> to work out faith, the vast majority of us would be excluded.</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">3. Christ saves by grace, through faith and without works</h2>\r\n\r\n<p style="text-align:start">The story of the thief on the cross makes God&rsquo;s grace in salvation crystal clear&mdash;this man had no works to offer, either before or after his salvation. A. W. Pink asks,</p>\r\n\r\n<p style="text-align:start">What could [the thief] do? He could not walk in the paths of righteousness for there was a nail through either foot. He could not perform any good works for there was a nail through eithr hand. He could not turn over a new leaf and live a better life for he was dying.<a href="http://unlockingthebible.org/sermon/breakfast-with-the-devil-supper-with-the-savior/#_ftn4" name="_ftnref4" style="box-sizing: border-box; background: transparent; color: rgb(78, 49, 118); text-decoration: none; font-family: &quot;Open Sans Light&quot;, sans-serif;">[4]</a></p>\r\n\r\n<p style="text-align:start">Truth can always be twisted by perverse people. The wonderful truth that <em>God saves by grace, through faith and without works</em> is no exception. A man said to Spurgeon, &ldquo;If I believed that, I would carry on in a life of sin,&rdquo; to which he replied, &ldquo;Yes, <em>you</em> would!&rdquo; <a href="http://unlockingthebible.org/sermon/breakfast-with-the-devil-supper-with-the-savior/#_ftn5" name="_ftnref5" style="box-sizing: border-box; background: transparent; color: rgb(78, 49, 118); text-decoration: none; font-family: &quot;Open Sans Light&quot;, sans-serif;">[5]</a></p>\r\n\r\n<p style="text-align:start">But the redeemed heart loves Christ. The forgiven sinner has a desire to please his Lord.</p>\r\n\r\n<p style="text-align:start">If the thief had been rescued from the cross and lived another 30 years, he would have lived a new and different life, but he did not have that opportunity. The fact that he entered paradise shows us with great clarity where our salvation lies.</p>\r\n\r\n<p style="text-align:start">Our salvation in Christ involves three marvelous gifts&mdash;justification, sanctification and glorification. Justification is the gift by which our sins are forgiven, sanctification is the gift by which we grow in the likeness of Christ and glorification is the gift by which we enter into the everlasting joy of heaven. If you get that, you get the Christian life.</p>\r\n\r\n<p style="text-align:start">Now think about what happened to this man. He was justified and glorified on the same day! He completely bypassed sanctification! This man missed out on the entire Christian life&mdash;no battles with temptation, no struggles with prayer. He was not baptized, he never received communion and he did not become a member of any church.</p>\r\n\r\n<p style="text-align:start">Here&rsquo;s what that tells us: Entrance to heaven comes through justification, not through sanctification. You enter heaven by forgiveness and through the righteousness that Jesus give you. You do not enter into heaven by the Christian life.</p>\r\n\r\n<p style="text-align:start">The New Testament repeats this theme again and again&hellip;</p>\r\n\r\n<p style="text-align:start">A man is not justified by observing the law, but by faith in Jesus Christ. (Galatians 2:16)</p>\r\n\r\n<p style="text-align:start">He saved us, not because of righteous things we had done, but because of his mercy. (Titus 3:5)</p>\r\n\r\n<p style="text-align:start">For it is by grace you have been saved, through faith&ndash;and this not from yourselves, it is the gift of God&ndash;not by works, so that no one can boast. (Ephesians 2:8-9)</p>\r\n\r\n<p style="text-align:start">It is always true that where faith is birthed works will follow, but salvation is by grace alone, through faith alone, in Christ alone. This is the good news that your acceptance with God does not depend on your performance in the Christian life.</p>\r\n\r\n<p style="text-align:start">Where would you be if Christ said, &ldquo;I forgive you, but I&rsquo;ll be watching to see how you do from now on.&rdquo; What kind of love is that? &ldquo;I forgive you, but make sure you don&rsquo;t mess up again.&rdquo; When you read the words &ldquo;not by works,&rdquo; rejoice. If it wasn&rsquo;t for this you&rsquo;d be sunk because your Christian life is not what you want it to be and neither is mine.</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">4. Christ gives complete assurance</h2>\r\n\r\n<p style="text-align:start">Today, you will be with me in paradise. (Luke 23:43)</p>\r\n\r\n<p style="text-align:start">Don&rsquo;t you just hate the business of waiting for exam results? You do the test, hand in your paper and then you have to wait. Can you imagine living your whole life waiting for the results? Imagine praying every day, serving every week and then wondering, &ldquo;Will I make it into heaven? Or will I spend eternity in hell?&rdquo;</p>\r\n\r\n<p style="text-align:start">When the man says, &ldquo;Jesus, remember me when you come into your kingdom,&rdquo; Christ does not say, &ldquo;We&rsquo;ll have to wait and see.&rdquo; He doesn&rsquo;t say, &ldquo;It&rsquo;s rather late in the day for you to think about repentance now. Look at all the years you&rsquo;ve wasted!&rdquo; No, Jesus says, &ldquo;Today, you will be with me in paradise!&rdquo;</p>\r\n\r\n<p style="text-align:start">The Son of God brings the declaration of the last day forward for all who put their trust in him. Do you see how the gift of assurance flows from Christ saving us by grace, through faith and without works? If our works were in any way involved in our gaining entrance into heaven, assurance would be impossible. We could never know if we had done them.</p>\r\n\r\n<p style="text-align:start">If salvation rested on our works in any way, all assurance would be arrogance, because it would be saying &ldquo;I&rsquo;ve done the necessary works.&rdquo; Salvation depends, not on your works for Christ, but on Christ&rsquo;s work for you. His work is finished. It&rsquo;s perfect and complete. You can rest your life, death and eternity on him with complete confidence.</p>\r\n\r\n<p style="text-align:start">Jesus says, &ldquo;I tell you the truth, today you will be with me in paradise&rdquo; (Luke 23:43). Christ is the Lord of paradise. He holds its keys. There can be no higher assurance than his promise.That&rsquo;s why the apostle Paul says, &ldquo;It is God who justifies. Who is he that condemns?&rdquo; (Romans 8:33-34)</p>\r\n\r\n<p style="text-align:start">Christ does not want you to spend the rest of your life worrying about the final outcome of your life. This is the root of all worship. You can begin rejoicing in all that he has in store for you. That&rsquo;s why joy comes, not sadness, strength rather than weakness, when we grasp the love of Christ. We rejoice in the hope of the glory of God (Romans 5:2).</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">5. Christ has great joy in redeeming sinners</h2>\r\n\r\n<p style="text-align:start">I tell you the truth, today you will be with me in paradise. (Luke 23:43)</p>\r\n\r\n<p style="text-align:start">The phrase that&rsquo;s translated, &ldquo;I tell you the truth,&rdquo; comes from the single word, &ldquo;Amen.&rdquo;</p>\r\n\r\n<p style="text-align:start">When the man says, &ldquo;Remember me when you come into your kingdom,&rdquo; Jesus replies, &ldquo;Amen, today you will be with me in paradise!&rdquo; Do you see the joy in that? Here&rsquo;s the &ldquo;Amen!&rdquo; to the word of faith. This is why he came. This is why he is suffering. There is joy in heaven over one sinner who repents. Do you see the love of Christ here?</p>\r\n\r\n<p style="text-align:start">Don&rsquo;t ever imagine that Christ is reluctant to save you. Christ says &ldquo;Amen&rdquo; to the simplest faith. He is not looking to keep you out. He is looking to bring you in!</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">6. Christ promises a life of indescribable joy</h2>\r\n\r\n<p style="text-align:start">Today you will be with me in paradise. (Luke 23:43)</p>\r\n\r\n<p style="text-align:start">Can you imagine anything further from this man&rsquo;s experience? He&rsquo;s a criminal and he&rsquo;s on a cross. He feels he is in hell already and the worst is still to come. He&rsquo;s absolutely hopeless and powerless, and in the middle of all this pain and guilt, Christ says to him, &ldquo;You will be with me in paradise, today!&rdquo; To paraphrase Spurgeon, this man had breakfast with the devil, met Christ before noon and then had supper in paradise.</p>\r\n\r\n<p style="text-align:start">The thief thought that Christ&rsquo;s kingdom would come some time in the distant future. He says, &ldquo;Remember me.&rdquo; But Jesus is saying to him, &ldquo;You don&rsquo;t need to worry about me remembering you. We&rsquo;re going to be there today&mdash;you and me! You will savor all of the joys of paradise before this day, in which you&rsquo;re experiencing so much pain, is done.&rdquo;</p>\r\n\r\n<p style="text-align:start">Death does not lead to a long period of unconsciousness. Nor does it lead, for the believer, to a long process of being prepared. For a Christian believer, death is an immediate translation into the joys of life at the right hand of God. To be absent from the body is to be present with the Lord. Today you will be with me in paradise.</p>\r\n\r\n<p style="text-align:start">Christian, heaven is much nearer than you think. I love the way C. S. Lewis pictures that in the Narnia novels, where the children slip into a glorious world that is just on the other side of the wardrobe.</p>\r\n\r\n<p style="text-align:start">Your life is like a mist, like steam or a vapor that appears for a little while and then vanishes. Everything that&rsquo;s burdening you and consuming you now is like breath on a window on a cold day. When you&rsquo;ve been in the presence of Christ for a hundred thousand years you&rsquo;ll be saying, &ldquo;Why was I so consumed, so worried about that?&rdquo;</p>\r\n\r\n<p style="text-align:start">&nbsp;</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">7. Christ is with his people now and always</h2>\r\n\r\n<p style="text-align:start">Today, you will be with me in paradise. (Luke 23:43)</p>\r\n\r\n<p style="text-align:start">Paradise is heaven and the greatest joy of heaven is the presence of Jesus. The lamb at the center of the throne will be their shepherd. He will lead them to springs of living water (Revelation 7:17). Christ himself will lead you into all the joys of heaven.</p>\r\n\r\n<p style="text-align:start">The thief on the cross went from nature to grace and from grace to glory in one day. He bypassed the entire Christian life. Christ could do this for every Christian if he wanted to. Imagine what that would be like&mdash;every conversion on a Sunday would lead to a funeral on a Monday. You put your trust in Christ in the service, &ldquo;Have a nice dinner!&rdquo;</p>\r\n\r\n<p style="text-align:start">Why doesn&rsquo;t Christ do that? Four out of five Christians will say, &ldquo;He is leaving us here to get us better prepared for heaven.&rdquo; No! You&rsquo;re as ready for heaven on the day you commit to Christ as you will ever be! You get to heaven on the basis of your justification, not your sanctification.</p>\r\n\r\n<p style="text-align:start">So, why does he leave you here? Do you see that the only reason you are not in heaven, if you are a Christian believer, is that he has work for you to do? Are you doing it?</p>\r\n\r\n<p style="text-align:start">To those who die, Christ says, &ldquo;You will be with me,&rdquo; and to those who live, Christ says, &ldquo;I will be with you.&rdquo; I&rsquo;ll never leave you, I&rsquo;ll never forsake you. On that basis, go into all the world and I&rsquo;ll make you a light to the nations. Do you see the love of Christ here?</p>\r\n\r\n<p style="text-align:start">I want you to look at this love of Christ until it becomes irresistible to you. Look at the love of Christ. If you are not a Christian you will say, &ldquo;Why am I holding back from this Savior? What is the value of all my arguments and objections?&rdquo; Keep looking at the love of Christ until you come to the place where you say, &ldquo;I must have this Christ and He must have me.&rdquo; May the Lord bring all of us there today.</p>', 'John Doe', NULL, '2017-05-02 21:00:00', 1, 0, 1, '2017-07-04 09:22:06', '2017-07-04 09:22:06', NULL),
(5, 'Simeon: He Is the Christ', 'simeon-he-is-the-christ', 'assets/uploads/images/394585503.jpg', 'We know very little about Simeon. It doesn’t matter if he was a priest or a plumber; a mechanic or a missionary. It doesn’t matter if he was young or old when he died, or what opportunities he had during his short time in this world. What matters is that he was righteous and devout, waiting for the consolation of Israel and the Holy Spirit was upon him.', '<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/CrossOfChrist_02-600x410.jpg" style="height:410px; width:600px" /></p>\r\n\r\n<p style="text-align:start">It had been revealed to [Simeon] by the Holy Spirit that he would not see death before he had seen the Lord&rsquo;s Christ.<strong><em> &nbsp;</em>(</strong>Luke 2:26)</p>\r\n\r\n<p style="text-align:start">It is often assumed that Simeon was an old man, but the Bible never says that.&nbsp; The reason we assume him to be old is that when he holds Jesus in his arms, he says to God, &ldquo;Now you are letting your servant depart in peace.&rdquo;&nbsp; He may have been old, but not necessarily so.</p>\r\n\r\n<p style="text-align:start">Another assumption that is often made is that Simeon was a priest.&nbsp; But, again, the Bible never says that.&nbsp; We don&rsquo;t know Simeon&rsquo;s work or profession. &nbsp;The reason we assume him to have been a priest is that he took Jesus and his arms and blessed God for him.&nbsp; He may have been a priest, but not necessarily so.&nbsp; He is simply described as &ldquo;a man in Jerusalem&rdquo; (2:25).</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">What we know about Simeon</h2>\r\n\r\n<p style="text-align:start">Now there was a man in Jerusalem, whose name was Simeon, and this man was righteous and devout, waiting for the consolation of Israel, and the Holy Spirit was upon him. &nbsp;(Luke 2:25)</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">This man was righteous</h3>\r\n\r\n<p style="text-align:start">That speaks to his relationships with other people.&nbsp; He was a man of his word.&nbsp; He did what was right.&nbsp; His &lsquo;yes&rsquo; was yes, and his &lsquo;no&rsquo; was no.&nbsp; He could be trusted in business; you could ount on him as a friend.&nbsp; He was a man of character and of integrity.</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">He was devout</h3>\r\n\r\n<p style="text-align:start">This speaks to is relationship with God.&nbsp; He loved God.&nbsp; He worshipped God.&nbsp; He served God. &nbsp;He prayed to God.&nbsp; God carried weight in his mind and in his heart.</p>\r\n\r\n<p style="text-align:start">Some people like to point out that they&rsquo;re honest and upright. &nbsp;Yes, what about your devotion to God?&nbsp; Others like to talk about their devotion to God. &nbsp;Yes, what about your right conduct with regard to others? &nbsp;Simeon was righteous and devout.&nbsp; These two belong together.</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">He was waiting for the consolation of Israel</h3>\r\n\r\n<p style="text-align:start">That speaks to his hope. &nbsp;His confidence for life and death was not in his devout and upright life.&nbsp; It was not in the temple or in its rituals.&nbsp; He was waiting and looking for the One to whom all of the Old Testament Scriptures point, the Promised One. &nbsp;Here he is called the Consolation (or comfort) of Israel.</p>\r\n\r\n<h3 style="color:rgb(95, 95, 95); font-style:normal; text-align:start">The Holy Spirit was upon him</h3>\r\n\r\n<p style="text-align:start">What a great statement that is.&nbsp; In some way the presence of Almighty God himself rested on this man. &nbsp;When people were with him, they felt that they had come near to the Lord. &nbsp;There was something about him that marked him as a person who walked closely with God.</p>\r\n\r\n<p style="text-align:start">We know very little about Simeon. &nbsp;It doesn&rsquo;t matter if he was a priest or a plumber; a mechanic or a missionary.&nbsp; It doesn&rsquo;t matter if he was young or old when he died, or what opportunities he had during his short time in this world.&nbsp; What matters is that he was righteous and devout, waiting for the consolation of Israel and the Holy Spirit was upon him.</p>', 'Leslie Mutinda', NULL, '2016-01-06 21:00:00', 1, 0, 1, '2017-07-04 09:57:27', '2017-07-04 09:57:27', NULL),
(6, 'Everything You Need for Growth', 'everything-you-need-for-growth', 'assets/uploads/images/388699001.jpg', 'For this very reason, make every effort to add to your faith goodness; and to goodness, knowledge; and to knowledge, self-control; and to self-control, perseverance; and to perseverance, godliness; and to godliness, brotherly kindness; and to brotherly kindness, love.', '<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/Growth%2Bfotolia.jpg" style="height:1000px; width:1500px" /></p>\r\n\r\n<p style="text-align:start">For this very reason, make every effort to add to your faith goodness; and to goodness, knowledge; and to knowledge, self-control; and to self-control, perseverance; and to perseverance, godliness; and to godliness, brotherly kindness; and to brotherly kindness, love. (2 Peter 1:5-7; NIV)</p>\r\n\r\n<p style="text-align:start">Picture in your mind a Volkswagen and a 747 airplane. Now imagine the Volkswagen <em>pulling</em> the 747.<a href="http://unlockingthebible.org/sermon/everything-you-need-for-growth/#_ftn1" name="_ftnref1" style="box-sizing: border-box; background: transparent; color: rgb(78, 49, 118); text-decoration: none; font-family: &quot;Open Sans Light&quot;, sans-serif;">[1]</a> Believe it or not, a Volkswagen can actually do this, but the power of a Volkswagen could never make the thing fly!</p>\r\n\r\n<p style="text-align:start">You cannot live the Christian life apart from the power of the Holy Spirit. The New Testament talks about people who have a form of godliness, but they deny its power (2 Tim. 3:5). That kind of religion is rather like the Volkswagen pulling the plane. It takes a great effort, but it&rsquo;s ultimately futile; it will never fly! Jesus said &ldquo;Apart from me you can do nothing&rdquo; (John 15:5).</p>\r\n\r\n<p style="text-align:start">There is a kind of effort that is completely futile, but there is also a kind of effort that is wonderfully fruitful, and that is what Peter is talking about here: &ldquo;For this very reason&hellip;&rdquo; (v5). In the light of the gospel&mdash;because you participate in the divine nature and Christ has released you from Satan&rsquo;s chains&mdash;you are in a position to act. Use the power that you have been given. Fire up these great engines and fly!</p>\r\n\r\n<h2 style="font-style:normal; text-align:start">Why some Christians never seem to grow</h2>\r\n\r\n<p style="text-align:start">Our title this morning is &ldquo;Everything You Need For Growth,&rdquo; and Peter&rsquo;s message is that in Christ you have everything you need for a thriving, productive, and growing Christian life. But if God has provided everything we need for life and godliness, why is it that some Christians never seem to grow?</p>\r\n\r\n<p style="text-align:start">There are Christian people who never seem to make any progress. They don&rsquo;t have much joy. Their lives don&rsquo;t seem to lead to anything. Peter says that they seem &ldquo;ineffective and unproductive in their knowledge of Jesus Christ&rdquo; (v8). Why is that?</p>\r\n\r\n<p style="text-align:start">If you want to grow in the Christian life, Peter says that there are certain things you must do. There are certain things that you must pursue in the power of the Spirit and &ldquo;if you possess these things in increasing measure they will keep you from being ineffective and unproductive in your knowledge of our Lord Jesus Christ&rdquo; (v8).</p>\r\n\r\n<p style="text-align:start">You have to &ldquo;make every effort&rdquo; (v5) to pursue these things. You have to get into an active frame of mind if you want to grow. You have to take responsibility for your own spiritual growth. You cannot be passive in this. It&rsquo;s no use saying, &ldquo;Let go and let God.&rdquo; That&rsquo;s the opposite of what Peter says here. There are certain things that God has called you to pursue, and Peter tells us what they are.</p>\r\n\r\n<p style="text-align:start">Notice how Peter brings together God&rsquo;s work and our responsibility: God calls us; God saves us; God gives us everything that we need for life and godliness. Yet, at the same time, he calls us to act. For this very reason, add to your faith goodness and knowledge and self-control&hellip; (v5).</p>\r\n\r\n<p style="text-align:start">Dr. Martyn Lloyd Jones has a helpful illustration from the world of farming: Suppose you are given a farm. You are given the tools, and you are given the seed. What we are called to do then, is to farm. Lloyd Jones points out that:</p>', 'Muchembi Grace', NULL, '2017-05-03 21:00:00', 1, 0, 1, '2017-07-04 10:01:51', '2017-07-04 10:01:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `url_key`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bible', 'bible', 'description', 1, NULL, '2017-02-27 08:41:24', NULL),
(2, 'church', 'church', 'description', 1, '2017-02-26 07:35:36', '2017-02-27 08:41:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `blog_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `viewed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congregations`
--

CREATE TABLE `congregations` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci,
  `lastname` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` text COLLATE utf8mb4_unicode_ci,
  `gender` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `place_of_stay` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci COMMENT 'adult,child',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `congregations`
--

INSERT INTO `congregations` (`id`, `firstname`, `lastname`, `image_url`, `district`, `gender`, `date_of_birth`, `email`, `phone`, `place_of_stay`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'carol', 'lavina', 'assets/uploads/images/627794053.jpg', 'Bethlehem', 'female', '1995-02-13', 'carolavymathews95@gmail.com', '0717548381', 'utawala fagilia', 'adult', '2017-02-26 07:32:29', '2017-02-26 07:32:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `viewed` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `title`, `image_url`, `description`, `content`, `facebook_url`, `twitter_url`, `youtube_url`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Church Construction', 'assets/uploads/images/988633897.jpg', 'From the inception of your church construction project, we bring an outstanding team of professionals to work alongside your building team, to bring building projects to completion within budget and on time, and with a passionate commitment to quality, detail and service.', '<p><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/Church-Under-Construction.png" style="height:300px; width:640px" /></p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(95, 100, 115); font-family:achille regular; font-size:16px">The traditional process to building can often leave you to make important decisions on your own. Church Design-Build is different &ndash; in this system, the architect and contractor work together as a team, streamlining the decision making process.</span></p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(95, 100, 115); font-family:achille regular; font-size:16px">We evaluate your current and future programs to develop original designs that balance form and function, while staying true to your mission and values. We&rsquo;ve managed designs from large sanctuaries and coffee shops, to custom child-themed facilities.</span></p>\r\n\r\n<p><span style="font-size:18px"><span style="background-color:rgb(255, 255, 255); color:rgb(95, 100, 115); font-family:achille regular; font-size:16px"><strong>mpesa:</strong></span></span></p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(95, 100, 115); font-family:achille regular; font-size:16px"><strong>​paybill: 2344</strong></span></p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(95, 100, 115); font-family:achille regular; font-size:16px"><strong>Acc Num:</strong></span></p>\r\n\r\n<p><span style="background-color:rgb(255, 255, 255); color:rgb(95, 100, 115); font-family:achille regular; font-size:16px"><strong>​78998789789 mybacnk</strong></span></p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 1, '2017-07-04 10:46:59', '2017-07-04 10:46:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `event_date` timestamp NULL DEFAULT NULL,
  `event_location` text COLLATE utf8mb4_unicode_ci,
  `event_category_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image_url`, `brief_description`, `content`, `event_date`, `event_location`, `event_category_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Catalyst Conference', 'assets/uploads/images/619683159.jpg', 'Hosted by Catalyst, one of the most innovative conference leaders around, this conference takes church leaders where they are at and helps boost them to a new level. Leadership requires resilience, organization, love, and practical wisdom. This is the conference that will help you get there.', '<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/Catalyst-identity.jpg" style="height:391px; width:700px" /></p>\r\n\r\n<p style="text-align:start">Hosted by Catalyst, one of the most innovative conference leaders around, this conference takes church leaders where they are at&nbsp;and helps boost them to a new level. Leadership requires resilience, organization, love, and practical wisdom. This is the conference that will help you get there.</p>\r\n\r\n<p style="text-align:start"><strong>2017-2018 Conference Details</strong></p>\r\n\r\n<ul>\r\n	<li><a href="https://catalystconference.com/cincinnati" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 159, 238); text-decoration: none; transition: all 0.3s;">Catalyst Cincy: May 11-12, 2017 (2 Days) Cincinnati, OH</a><br />\r\n	Speakers: Andy Stanley, Craig Groeschel, Fr. Edwin Leahy, Jenny Yang, Bryan Loritts, Soong-Chan Rah, Jo Saxton, Propaganda, John Crist, Joseph Sojourner<br />\r\n	Cost: Super Early Bird-$239 (Ends Feb 23, 2017); Early Bird-$269 (Ends April 6, 2017); Regular-$299</li>\r\n	<li><a href="https://catalystleader.com/atlanta" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 159, 238); text-decoration: none; transition: all 0.3s;">Catalyst Atlanta: October 5-6, 2017 (2 Days)&nbsp;Atlanta, GA</a><br />\r\n	Speakers: Andy Stanley, Craig Groeschel, Fr. Edwin Leahy, Jenny Yang, Bryan Loritts, Soong-Chan Rah, Jo Saxton, Propaganda, John Crist, Joseph Sojourner<br />\r\n	Cost: Super Early Bird-$239; Early Bird-$269; Regular-$299</li>\r\n	<li><a href="https://catalystconference.com/westcoast" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 159, 238); text-decoration: none; transition: all 0.3s;">Catalyst West: April 12-13, 2018 (2 Days) Orange County, CA</a><br />\r\n	Speakers:&nbsp;Andy Stanley, Brenda Salter McNeil, Levi Lusko, Graig Groeschel, Jo Saxton, Brian Houston, DeVon Franklin, Fr. Edwin Leahy, Soong-Chan Rah, Tasha Morrison, Mike Foster, Propaganda, Brooke Ligertwood, Christon Gray, Megan Tibbits, Elevation Worship, John Crist, Joseph Sojourner<br />\r\n	Cost: Super Early Bird-$239</li>\r\n</ul>', '2017-12-27 12:30:00', 'Kisumu hall', 2, 1, '2017-07-04 09:37:39', '2017-07-04 09:50:02', NULL),
(3, 'Calvin Symposium on Worship', 'assets/uploads/images/635389539.jpg', 'The annual Calvin Symposium on Worship is a three-day conference sponsored by the Calvin Institute of Christian Worship and the Center for Excellence in Preaching.', '<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/Speaker.jpg" style="height:400px; width:698px" /></p>\r\n\r\n<p style="text-align:start">The annual Calvin Symposium on Worship is a three-day conference sponsored by the Calvin Institute of Christian Worship and the Center for Excellence in Preaching.</p>\r\n\r\n<p style="text-align:start">The conference brings together a wide audience of artists, musicians, pastors, scholars, students, worship leaders and planners, and other interested worshipers. People come from around the world for a time of fellowship, worship, and learning together, seeking to develop their gifts, encourage each other and renew their commitment to the full ministry of the church.</p>\r\n\r\n<p style="text-align:start"><strong>2018 Conference Details</strong></p>\r\n\r\n<ul>\r\n	<li>January 25-27, 2018 (3 Days)&nbsp;Grand Rapids, MI<br />\r\n	Speakers: James Abbington, Mike Abma, Alison Adam, Kevin Adams, Tony Alonso, and more&hellip;<br />\r\n	Cost:&nbsp;TBD</li>\r\n</ul>', '2018-01-03 12:25:00', 'Syokimau,Nairobi', 4, 1, '2017-07-04 09:33:17', '2017-07-04 09:33:17', NULL),
(5, 'Children’s Ministry Conference', 'assets/uploads/images/397135416.jpg', 'CMConnect’s Children’s Ministry Conference is organized by the church – for the Church. Unlike any other conference, it is designed to meet the specific needs of those in children’s ministry and to solve problems you face in your church.', '<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/03-31-pic-1_2015.jpg" style="height:667px; width:1000px" /></p>\r\n\r\n<p style="text-align:start">CMConnect&rsquo;s Children&rsquo;s Ministry Conference is organized by the church &ndash; for the Church.&nbsp;Unlike any other conference, it is designed to meet the specific needs of those in children&rsquo;s ministry and to solve problems you face in your church.</p>\r\n\r\n<p style="text-align:start"><strong>2018 Conference Details</strong></p>\r\n\r\n<ul>\r\n	<li><a href="https://cmconnect.org/cmconference/" style="box-sizing: border-box; background-color: transparent; color: rgb(0, 159, 238); text-decoration: none; transition: all 0.3s;">April 30-May 3, 2018 (4 Days)&nbsp;Brighton, MI</a><br />\r\n	Speakers: Squirt, Brad Tate, Tim and Amanda Cowles, Michael Chanley, Alex Fedorchuk, Luz Figueroa, Lori Bethran, Barry Newton, Tom Toombs, Ragaee Azab, Greg Baird, Roger Fields, Heidi Hensley, Jonathan Constant, Karen Rhodes, Elevate Dance Ministry, Justin Graves Band<br />\r\n	Cost: Early-$99 (Ends Feb 1, 2018); Regular-$169</li>\r\n</ul>', '2019-11-21 12:35:00', 'Machakos,Kenya', 4, 1, '2017-07-04 09:43:30', '2017-07-04 09:43:30', NULL),
(6, 'Circles Conference', 'assets/uploads/images/991319444.jpg', 'Circles Co. provides creatives of all levels and backgrounds, experiences that can help propel their ideas forward. We’re here to connect them with world-changing thinkers and leaders in the creative industry, and help reignite their passion for the visual.', '<p style="text-align:start">Circles Co. provides creatives of all levels and backgrounds, experiences that can help propel their ideas forward. We&rsquo;re here to connect them with world-changing thinkers and leaders in the creative industry, and help reignite their passion for the visual.</p>\r\n\r\n<p style="text-align:start"><img alt="" class="img-responsive" src="/church/public/assets/filesManagement/uploads/images/Giving-circles-771x514.jpg" style="height:514px; width:771px" /></p>\r\n\r\n<p style="text-align:start">Our mission is to empower creatives to be their best creative selfs though building experiences that will enhance their lives + creativity.</p>\r\n\r\n<p style="text-align:start">Here at Circles Co. we strive to bring you the best of the best to share their knowledge and process. Whether they are the up-and-comers whose work you need to be watching, or the design leaders whose portfolios you&rsquo;ve long admired; with this speaker line up, you are guaranteed to leave inspired and ready to create.</p>\r\n\r\n<p style="text-align:start"><strong>2017 Conference Details</strong></p>\r\n\r\n<ul>\r\n	<li>September 6-8, 2017 (3 Days) Grapevine, TX<br />\r\n	Speakers:&nbsp;Ash Huang, Jay Argaet, Tara Victoria, Peter Wilson, Amy &amp; Jennifer Hood, Brad Weaver, Dan Rubin, Micah Davis<br />\r\n	Cost: Main Pass-$297; Hangout Pass-$197; Live Stream Single-$57</li>\r\n</ul>', '2019-12-12 12:50:00', 'Mombasa', 3, 1, '2017-07-04 09:49:41', '2017-07-04 09:49:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `title`, `url_key`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Celebrations', 'celebrations', 'celebration events.', 1, '2017-02-24 12:06:58', '2017-02-24 12:06:58', NULL),
(2, 'Fests', 'fests', 'fests events', 1, '2017-02-25 02:51:48', '2017-02-25 02:51:48', NULL),
(3, 'Meetings', 'meetings', 'meetings events', 1, '2017-02-25 02:52:06', '2017-02-25 02:52:06', NULL),
(4, 'Prayers', 'prayers', 'prayers events', 1, '2017-02-25 02:52:22', '2017-02-25 02:52:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_registers`
--

CREATE TABLE `event_registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci,
  `lastname` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `event_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_registers`
--

INSERT INTO `event_registers` (`id`, `firstname`, `lastname`, `phone`, `email`, `event_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jean', 'lilcot', '098777', 'jeany@gmail.com', 2, '2017-02-26 03:45:56', '2017-02-26 03:45:56', NULL),
(2, 'h', 'k', '09', 'fsd@gmail.com', 1, '2017-02-26 03:48:11', '2017-02-26 03:48:11', '2017-02-07 21:00:00'),
(3, 'fjas', 'fjlkds', 'fjdklf', 'jdfklsafjdl@gmail.com', 1, '2017-02-26 07:42:03', '2017-02-26 07:42:03', NULL),
(4, 'jefflilcot', NULL, NULL, NULL, 7, '2017-06-09 02:53:36', '2017-06-09 02:53:36', NULL),
(5, 'jeff lilcot', NULL, '0729837368', 'jefflilcot@gmail.com', 2, '2017-06-09 03:38:15', '2017-06-09 03:38:15', NULL),
(6, 'jefflilcot', NULL, '0712122321', 'jefflilcot@gmail.com', 2, '2017-06-09 03:39:16', '2017-06-09 03:39:16', NULL),
(7, 'japheth waswa', NULL, '0988888888', 'jefflicot@gmail.com', 2, '2017-06-09 03:40:20', '2017-06-09 03:40:20', NULL),
(8, 'waswa jean', NULL, '0999999999', 'jefflilcot@gmail.com', 2, '2017-06-09 03:41:29', '2017-06-09 03:41:29', NULL),
(9, 'waswa', NULL, '0000000000', 'aswa@gmail.com', 1, '2017-06-09 04:02:26', '2017-06-09 04:02:26', NULL),
(10, 'waswa', NULL, '0000000000', 'jeandsla@gmail.com', 1, '2017-06-09 04:13:59', '2017-06-09 04:13:59', NULL),
(11, 'another', NULL, '0909099090', 'wolla@gmail.com', 1, '2017-06-09 04:15:13', '2017-06-09 04:15:13', NULL),
(12, 'rallgg', NULL, '0000000000', 'uoouiou@gmail.com', 2, '2017-06-09 04:15:54', '2017-06-09 04:15:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `image_urls` text COLLATE utf8mb4_unicode_ci,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `link_url` text COLLATE utf8mb4_unicode_ci,
  `large_image` text COLLATE utf8mb4_unicode_ci,
  `gallery_category_id` int(11) NOT NULL DEFAULT '0',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `brief_description`, `image_urls`, `video_url`, `link_url`, `large_image`, `gallery_category_id`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'Thoughts', 'Thoughts', 'assets/uploads/images/715467664.jpg', NULL, NULL, 'assets/uploads/images/779188368.jpg', 4, 1, '2017-07-04 10:35:37', '2017-07-04 10:35:37', NULL),
(14, 'divided house', 'divided house', 'assets/uploads/images/244737413.jpg', NULL, NULL, 'assets/uploads/images/594590928.jpg', 4, 1, '2017-07-04 10:33:32', '2017-07-04 10:33:32', NULL),
(13, 'love', 'love', 'assets/uploads/images/229790581.jpg', NULL, NULL, 'assets/uploads/images/951497395.jpg', 4, 1, '2017-07-04 10:31:20', '2017-07-04 10:31:20', NULL),
(12, 'complete surrender', 'complete surrender', 'assets/uploads/images/613172743.jpg', NULL, 'https://www.youtube.com/watch?v=ELUyDOJKEzE', NULL, 2, 1, '2017-07-04 10:28:32', '2017-07-04 10:28:32', NULL),
(11, 'Sermon on video', 'Sermon on video', 'assets/uploads/images/892333984.jpg', 'https://www.youtube.com/watch?v=ELUyDOJKEzE', NULL, NULL, 3, 1, '2017-07-04 10:25:01', '2017-07-04 10:25:01', NULL),
(10, 'Sermon on the mount', 'Sermon on the mount', 'assets/uploads/images/380343966.jpg', NULL, NULL, 'assets/uploads/images/500705295.jpg', 4, 1, '2017-07-04 10:21:33', '2017-07-04 10:21:33', NULL),
(9, 'John\'s Wedding Ceremony', 'Wedding ceremony', 'assets/uploads/images/316786024.jpg,assets/uploads/images/733751085.jpg,assets/uploads/images/744303385.jpg', NULL, NULL, NULL, 1, 1, '2017-07-04 10:11:24', '2017-07-04 10:17:16', NULL),
(16, 'father\'s day', 'father\'s day', 'assets/uploads/images/603624131.jpg', NULL, NULL, 'assets/uploads/images/629909939.jpg', 4, 1, '2017-07-04 10:37:29', '2017-07-04 10:37:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `url_key` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `title`, `url_key`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Slideshow', 'slideshow', 'slideshow', 1, '2017-02-24 03:53:25', '2017-02-24 03:53:25', NULL),
(2, 'Links', 'links', 'links gallery category', 1, '2017-02-24 14:13:21', '2017-02-24 14:13:21', NULL),
(3, 'Video', 'video', 'gallery videos', 1, '2017-02-25 02:57:06', '2017-02-25 02:57:06', NULL),
(4, 'Images', 'images', 'gallery images', 1, '2017-02-25 02:57:22', '2017-02-25 02:57:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_02_18_070519_create_sliders_table', 1),
(2, '2017_02_18_071546_create_donations_table', 1),
(3, '2017_02_18_074022_create_sermons_table', 1),
(4, '2017_02_18_074449_create_event_categories_table', 1),
(5, '2017_02_18_075111_create_events_table', 1),
(6, '2017_02_18_080447_create_event_registers_table', 1),
(7, '2017_02_18_081516_create_gallery_categories_table', 1),
(8, '2017_02_18_081924_create_galleries_table', 1),
(9, '2017_02_18_083024_create_congregations_table', 1),
(10, '2017_02_18_083623_create_blog_categories_table', 1),
(11, '2017_02_18_083841_create_blogs_table', 1),
(12, '2017_02_18_084323_create_comments_table', 1),
(13, '2017_02_18_085646_create_staff_table', 1),
(14, '2017_02_18_090045_create_settings_table', 1),
(15, '2017_02_23_070519_create_sunday_schedules_table', 2),
(16, '2017_02_23_071546_create_sunday_pages_table', 2),
(17, '2017_02_26_051211_create_contacts_table', 3),
(18, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(19, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(20, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(21, '2016_06_01_000004_create_oauth_clients_table', 4),
(22, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('4d55ee34e94a7f388a3ed9fbf413a3d6dcde5636ebdb6d153b0abc1bb24e3fd48cfa7f304beea904', NULL, 3, NULL, '[]', 0, '2017-04-18 11:09:48', '2017-04-18 11:09:48', '2018-04-18 14:09:48'),
('0772509ca5d8a8a09c65d38cb97d5d7a0cfedd34f096d3a11b2bc66c48dfa4ae3360ff5af1a83a5e', NULL, 3, NULL, '[]', 0, '2017-04-18 11:09:58', '2017-04-18 11:09:58', '2018-04-18 14:09:58'),
('4ff08814df0541094bf496d56491b2b5b4b1ab78791f0f273bfe4d484ee190b4444b322835ffab72', NULL, 3, NULL, '[]', 0, '2017-04-18 11:10:37', '2017-04-18 11:10:37', '2018-04-18 14:10:37'),
('3202d5d5f0871e0c7cbe522fd3ddbcaad5cf3dcd6022ff59d47671863d1b8dfffac6a885779f7483', NULL, 3, NULL, '[]', 0, '2017-04-18 11:11:07', '2017-04-18 11:11:07', '2018-04-18 14:11:07'),
('dd5eb1987d984961a3970488c473b712b3f1853281eb73da1a605fbbaa5183e03160e6ddbe10bc40', 1, 4, NULL, '[]', 0, '2017-04-18 11:12:19', '2017-04-18 11:12:19', '2018-04-18 14:12:19'),
('dd05fc29ff7e941d518b6a97bf1dbe5ac8320797faf936ff1de8c8d40ee18fe9bb3d85b1a0d9c100', 1, 4, NULL, '[]', 1, '2017-04-18 11:12:43', '2017-04-18 11:12:43', '2018-04-18 14:12:43'),
('9b8951a47eeff4c13934eb7dc9b01ab502eb320d4d108910063e73ac3f1869170cf591ab0fa5d2c8', 1, 4, NULL, '[]', 0, '2017-04-18 11:14:09', '2017-04-18 11:14:09', '2018-04-18 14:14:09'),
('99652e2d8880269567dfcbf1d7f237c84043b41bf3b14ffe20d15215f4b027c58bf3b58678f5c740', 1, 4, NULL, '[]', 1, '2017-04-18 11:14:31', '2017-04-18 11:14:31', '2018-04-18 14:14:31'),
('dd26901d4b79c5a13165342a7834986fae1ad8bcccdeb207f4cec3b7747f9d7e9d04fcf47f1e6e44', 1, 4, NULL, '[]', 0, '2017-04-18 11:14:55', '2017-04-18 11:14:55', '2018-04-18 14:14:55'),
('4f135c7e262281939700513d1f47392eba1dbc5afcd7a7553266fb9f314e06e9b0e70ee091bd5af6', 1, 4, NULL, '[]', 0, '2017-04-18 11:15:25', '2017-04-18 11:15:25', '2018-04-18 14:15:25'),
('455b1286c20e130d45ac60007567445a3e376755a741ba61da0b28563d01b83129e391e2fd680550', NULL, 3, NULL, '[]', 0, '2017-04-18 11:55:45', '2017-04-18 11:55:45', '2018-04-18 14:55:45'),
('9329ea266ff4d3e3deb99712f7c8bbb30ffe3485f43cf466e4f1620f5010676ea1b2956d77285c30', NULL, 3, NULL, '[]', 0, '2017-04-21 02:54:50', '2017-04-21 02:54:50', '2018-04-21 05:54:50'),
('34e48f897227adf1eba7de2b07a655dcf1eae6cccdb28bbcef423dea0d693bc50061568ed8e88bc9', 1, 4, NULL, '[]', 0, '2017-04-21 05:36:49', '2017-04-21 05:36:49', '2018-04-21 08:36:49'),
('6749bd006b65733d61fc0b0d17e6e25f12c2988cb6727b2e4b2df4844a989c140d69102b731971b8', NULL, 3, NULL, '[]', 0, '2017-04-21 05:45:21', '2017-04-21 05:45:21', '2018-04-21 08:45:21'),
('36d3a191528bad5bde2a52220c8345d57398162425a7c063b507691d5957be051d15e8ed0decc597', NULL, 3, NULL, '[]', 0, '2017-04-21 05:50:22', '2017-04-21 05:50:22', '2018-04-21 08:50:22'),
('b8163a5870561c1039b215dd56b359d0f142bd6aefa86a49fd049a5b4067bfb2e8a927ce367e7f07', NULL, 3, NULL, '[]', 0, '2017-04-21 05:54:10', '2017-04-21 05:54:10', '2018-04-21 08:54:10'),
('dd6ae894397fdda33a0e7b9a27920721dcea4ceae267b2174a85e11aa4a289d8ea77f4920ea24299', NULL, 3, NULL, '[]', 0, '2017-04-21 06:02:34', '2017-04-21 06:02:34', '2018-04-21 09:02:34'),
('ac11d4e76287cb8b15cbf84ded6f307f196b21203f5a1d9081f724bfd8423cbb0c6f47eb3f5ac26a', NULL, 3, NULL, '[]', 0, '2017-04-21 06:24:50', '2017-04-21 06:24:50', '2018-04-21 09:24:50'),
('3ea3f8b6e1e36f609f403b1f3692ec102f74fbad60871b9cd773360bd056bda70b0ef6ab3d68a31d', NULL, 3, NULL, '[]', 0, '2017-04-21 06:34:31', '2017-04-21 06:34:31', '2018-04-21 09:34:31'),
('8b5d72562d80ae80d8c458e01e6c4143e8f6072a801a1218a27f5073f79702e786e401d9b5b9e21b', NULL, 3, NULL, '[]', 0, '2017-04-21 06:46:13', '2017-04-21 06:46:13', '2018-04-21 09:46:13'),
('c75ac324b072e852bfe99957d506e018224b541f9b7fe156d4a0a67dc21dfb00a9ad945d42adce35', NULL, 3, NULL, '[]', 0, '2017-04-21 06:47:02', '2017-04-21 06:47:02', '2018-04-21 09:47:02'),
('352bf214a71e71f68f1f4d02baa88a616fb545217d888dcd7af9313a58a977d8bf263d861005f2df', NULL, 3, NULL, '[]', 0, '2017-04-21 06:55:41', '2017-04-21 06:55:41', '2018-04-21 09:55:41'),
('5eec4b88881f334fcbc9d1713f697a8795356c5cceac8d8131cc3c04f6373edb17fa069a0f909865', 1, 4, NULL, '[]', 0, '2017-04-21 07:47:53', '2017-04-21 07:47:53', '2018-04-21 10:47:53'),
('dc051860f5f3c495523e88d554edd5414b92f6a3419d87511626a31e8ee7800d3a6f71d6fb24cda4', NULL, 3, NULL, '[]', 0, '2017-04-26 05:39:55', '2017-04-26 05:39:55', '2018-04-26 08:39:55'),
('2dd80873a5045714c117a6e119195dc361a5292c8a89f35a37a911d29daa7c558b3a777534c2947e', NULL, 3, NULL, '[]', 0, '2017-04-26 05:39:55', '2017-04-26 05:39:55', '2018-04-26 08:39:55'),
('d6a5efdac2732066e7e898b9ce4c380e9a3314059b43732040afac1e7828cd6a0828f745c443ba98', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('65ea413cfcbfac7edc3cb56884ca76487a2deada1203c62f06fe3c4ba3dce896d307da22b0ec6269', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('6a15802ded005a5115efa4146492ee340b3ad1b746ae8e0a4e6da7d09f1bcb58985016f8962d0349', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('bbb76f64fb8172110a8527df82cfd24a021fd1ba57203968c033f0c39a8a49847b53653f84116b27', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('f3241d47a5bc4d8200fca7583a6e19136117162e6249b6022b8d41358be5098decba18e84c6d3ef7', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:36', '2017-04-26 06:23:36', '2018-04-26 09:23:36'),
('ad4c46c65aa988381d08e08f6b9738fa7354a0c5c256a6e397a8ce83ec5964bb4b921cdac0f99283', NULL, 3, NULL, '[]', 0, '2017-04-26 06:23:37', '2017-04-26 06:23:37', '2018-04-26 09:23:37'),
('f4dcdf451fa75a92604b49311a06a2262ccc009b866bcb82e9db7205a4dc530fa6fb4df02794f9ff', NULL, 3, NULL, '[]', 0, '2017-04-26 12:50:52', '2017-04-26 12:50:52', '2018-04-26 15:50:52'),
('da365c0ed2315533bdd897a5217b3c6ed3a2a63a792f7436041ed742863fd52ceef58ded0e771593', NULL, 3, NULL, '[]', 0, '2017-04-26 12:57:00', '2017-04-26 12:57:00', '2018-04-26 15:57:00'),
('2b86c42cd2fcf620d40da90348e40c8480e50ea5befedca3e84c2b978c780145b0afaa8ae844a8ab', NULL, 3, NULL, '[]', 0, '2017-04-26 12:57:57', '2017-04-26 12:57:57', '2018-04-26 15:57:57'),
('d925fc62d5ea89e7bb66d65489c59f5d3addb967a830a4d96708867b11d922f508bf4c867f26c0c7', NULL, 3, NULL, '[]', 0, '2017-04-27 02:47:04', '2017-04-27 02:47:04', '2018-04-27 05:47:04'),
('68cc6506ee6afc2b904f729a06d8dc1ed4007f77d183df404373aa25f2ef50391d83506c709621cd', NULL, 3, NULL, '[]', 0, '2017-04-28 04:33:03', '2017-04-28 04:33:03', '2018-04-28 07:33:03'),
('00492a9d4ee405a4df5c22a1e0e97709ab2983f2afa4bc1d3f96a0475ed8597a8188fe897ce38537', NULL, 3, NULL, '[]', 0, '2017-04-28 05:28:12', '2017-04-28 05:28:12', '2018-04-28 08:28:12'),
('3899d5ec2404a95f2d9552459b142a81c1df7bbc518e0912c514e6f3dbb77b86d2f10a944c26946b', NULL, 3, NULL, '[]', 0, '2017-04-28 05:28:12', '2017-04-28 05:28:12', '2018-04-28 08:28:12'),
('306a25fe66581d331afc917e1bb3af4f69581f8d8e143bf15d0bd8876602db310cf2e354457b1f5e', NULL, 3, NULL, '[]', 0, '2017-05-05 03:27:04', '2017-05-05 03:27:04', '2018-05-05 06:27:04'),
('fc0a2f98bf8cf8126a5f9cf6b51a7ffb00b1efaadd3e92e6e5006c5bef280fbfac48503175d03143', NULL, 3, NULL, '[]', 0, '2017-05-08 07:11:26', '2017-05-08 07:11:26', '2018-05-08 10:11:26'),
('5d1b54633a990b4c3ca7405788eaca7de6330d2000d9b1989312cf03055e83e83036ec55feca0e87', NULL, 3, NULL, '[]', 0, '2017-05-08 07:25:05', '2017-05-08 07:25:05', '2018-05-08 10:25:05'),
('131098b3e7abde24cdb5f92f0372d181b8ff5640b2cea087de4323d8bd3c1f31d579168665292432', NULL, 3, NULL, '[]', 0, '2017-05-08 10:02:17', '2017-05-08 10:02:17', '2018-05-08 13:02:17'),
('9b9041e43b2db18d9654635ae83fe1cfdb45a4c2222120aec489561bd5e9172c573a521ad4e4036d', NULL, 3, NULL, '[]', 0, '2017-05-08 10:20:47', '2017-05-08 10:20:47', '2018-05-08 13:20:47'),
('a1aa21766e1f70568aa8cc815b5d40fe2ef9dbb05f8ed8a7e399fae6f8679280f90a480ce8d69dc4', NULL, 3, NULL, '[]', 0, '2017-05-09 02:47:58', '2017-05-09 02:47:58', '2018-05-09 05:47:58'),
('104c3e4e74ee012cfd8f65ff4066f8e681f5db945ea670579a2d50302ff5c917a64510da10ab069d', NULL, 3, NULL, '[]', 0, '2017-05-10 02:58:13', '2017-05-10 02:58:13', '2018-05-10 05:58:13'),
('7f41cfc66ba5ce0da47b441641a7b601ac14cf2e0563c67fd6c4b501b26c4c736645ef59e7e3b165', NULL, 3, NULL, '[]', 0, '2017-05-10 08:06:29', '2017-05-10 08:06:29', '2018-05-10 11:06:29'),
('b03e27565e56720e817589e5e630eadb7947cd8b7b591cd7886171b78c48f2c0ab714c9ede1c26d1', NULL, 3, NULL, '[]', 0, '2017-05-12 04:19:33', '2017-05-12 04:19:33', '2018-05-12 07:19:33'),
('f176fddaadc9a70780a6f7876cb490c183e2a71bcab82f65bde49cedcc0acdb22d02469e3ebec72f', NULL, 3, NULL, '[]', 0, '2017-05-15 03:07:29', '2017-05-15 03:07:29', '2018-05-15 06:07:29'),
('2da36dfb395935b6cd9785028fff1049b5cd3eefa532c9549fb6db952543995d651c765a30d9c3f8', NULL, 3, NULL, '[]', 0, '2017-05-15 05:11:05', '2017-05-15 05:11:05', '2018-05-15 08:11:05'),
('d9b5e66817b40b89edbdb87e3c6cddccf4dbd97d12fc15d60189bd9117ecd9eb475c38e5da22b71e', NULL, 3, NULL, '[]', 0, '2017-05-15 10:05:44', '2017-05-15 10:05:44', '2018-05-15 13:05:44'),
('2c8a4ca09cfbd2fa85aed1335878c304f6d29d437f719cb33b4da3536ad39f6bd5dc154f9ec9d47a', NULL, 3, NULL, '[]', 0, '2017-05-17 08:39:56', '2017-05-17 08:39:56', '2018-05-17 11:39:56'),
('a69bcf524187de763be03540f03bf253ca28e2dd671a6ef28893f50ca58ab7343d7032eadbffa96d', NULL, 3, NULL, '[]', 0, '2017-05-18 05:47:02', '2017-05-18 05:47:02', '2018-05-18 08:47:02'),
('21244f5d9b36f3206a3298bb7e5bc482e1db0ba421c665d058c51b6a346f250f8952f2a2efcc05cc', NULL, 3, NULL, '[]', 0, '2017-06-09 05:16:36', '2017-06-09 05:16:36', '2018-06-09 08:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'MIP7JLzMVfVIA9pxIqwzDBmBSbfslu0HtA0RtNdA', 'http://localhost', 1, 0, 0, '2017-04-18 11:07:56', '2017-04-18 11:07:56'),
(2, NULL, 'Laravel Password Grant Client', 'rGggkPoVmj5GyQIPGceIc6FP1pYVPTBKuOX64W9G', 'http://localhost', 0, 1, 0, '2017-04-18 11:07:56', '2017-04-18 11:07:56'),
(3, 11, 'Client Credentials Client', 'cwQCFnZ0XjeeTyfRPwgorAWu6F8nqWdqqtqHAcl7', 'null', 0, 0, 0, '2017-04-18 11:09:17', '2017-04-18 11:09:17'),
(4, NULL, '21', 'ggVZ2cOeEoVROan8z71qEord94yX24EP4iCkiqUH', 'http://localhost', 0, 1, 0, '2017-04-18 11:12:04', '2017-04-18 11:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-04-18 11:07:56', '2017-04-18 11:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('8cb80b22a022c0fcad2cee4333b25786f9a9a49e45b06f6e6694b4cb33c969e76750e15710142ab1', 'dd5eb1987d984961a3970488c473b712b3f1853281eb73da1a605fbbaa5183e03160e6ddbe10bc40', 0, '2018-04-18 14:12:19'),
('42fe580d07847a005ca2cbe22fbc810071efc1e0aaf80f4ed153799bda956671fcc6253ca7152b08', 'dd05fc29ff7e941d518b6a97bf1dbe5ac8320797faf936ff1de8c8d40ee18fe9bb3d85b1a0d9c100', 1, '2018-04-18 14:12:43'),
('dee040acb2b3240db95941fad43d93085808813fd4b3ad1bb832102a89ba38195c9080cce412b329', '9b8951a47eeff4c13934eb7dc9b01ab502eb320d4d108910063e73ac3f1869170cf591ab0fa5d2c8', 0, '2018-04-18 14:14:09'),
('95f2ae9e54aa07ac9a2cf8a9f8b12a9792962abf8d662d0d900f376aeb009b291a06db9398919a3d', '99652e2d8880269567dfcbf1d7f237c84043b41bf3b14ffe20d15215f4b027c58bf3b58678f5c740', 1, '2018-04-18 14:14:31'),
('c0fe496a5fcabfa917e11ec90f0913d15ba9a414f31b9ad4e5e5ef713a723ca510bf1505a02fc4c2', 'dd26901d4b79c5a13165342a7834986fae1ad8bcccdeb207f4cec3b7747f9d7e9d04fcf47f1e6e44', 0, '2018-04-18 14:14:55'),
('4202686ec0054c40c3a937eab9588e4d4e93f8e95f697e4c4b236b48a874e87af6430dc42fd0ce20', '4f135c7e262281939700513d1f47392eba1dbc5afcd7a7553266fb9f314e06e9b0e70ee091bd5af6', 0, '2018-04-18 14:15:25'),
('d36ece899f943ebd581f4f8fe91ff5736ff6a5521e34526085b205d4823fae86ac3696324efeb11c', '34e48f897227adf1eba7de2b07a655dcf1eae6cccdb28bbcef423dea0d693bc50061568ed8e88bc9', 0, '2018-04-21 08:36:49'),
('c5c95127961d76d713713a7a65e5dc3bc5c506d24c0ee2f0416cf8594aecbc9298e6a8739ac696ef', '5eec4b88881f334fcbc9d1713f697a8795356c5cceac8d8131cc3c04f6373edb17fa069a0f909865', 0, '2018-04-21 10:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jefflilcot@gmail.com', '$2y$10$wIhfLXS09cPBXFUmZno1n.jikq/DdrCG1oaggO4MTDHg2aVOHBEhO', '2017-02-24 02:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `audio_url` text COLLATE utf8mb4_unicode_ci,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `pdf_url` text COLLATE utf8mb4_unicode_ci,
  `sermon_date` timestamp NULL DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`id`, `title`, `image_url`, `brief_description`, `audio_url`, `video_url`, `pdf_url`, `sermon_date`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Limitations', 'assets/uploads/images/162245008.jpg', 'In the first parable, our Lord spoke about four different kinds of soil. Now it is as if the camera zooms in on the good soil. The other three – the path, the rocky ground, and the thorns drop out of sight. So now we are looking at the good soil.', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=kb5ci8ge_Pw', NULL, '2017-02-06 21:00:00', 1, '2017-07-04 09:03:34', '2017-07-04 09:03:34', NULL),
(10, 'Love God with All Your Heart', 'assets/uploads/images/776719835.jpg', 'Hear, O Israel: The LORD our God, the LORD is one.  Love the LORD your God with all your heart and with all your soul and with all your strength.', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=Ud2v-kugikw', NULL, '2017-04-11 21:00:00', 1, '2017-07-04 08:59:57', '2017-07-04 08:59:57', NULL),
(9, 'Every Knee Shall Bow', 'assets/uploads/images/403645833.jpg', 'Here is the Easter message that I want to bring from these two passages: God’s unbreakable promise is that every knee shall bow at the name of Jesus.', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=ZfYhOJPyDR4', NULL, '2017-05-30 21:00:00', 1, '2017-07-04 08:56:21', '2017-07-04 08:56:21', NULL),
(8, 'The Joys of Life in the Resurrection Body', 'assets/uploads/images/869466145.jpg', 'Behold! I tell you a mystery.  We shall not all sleep, but we shall all be changed, in a moment, in the twinkling of an eye, at the last trumpet.  For the trumpet will sound, and the dead will be raised imperishable, and we shall be changed.', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/108641951?iframe=true&width=400&height=200', 'https://www.youtube.com/watch?v=nIBELwRn5KM', NULL, '2017-05-15 21:00:00', 1, '2017-07-04 08:49:35', '2017-07-04 08:49:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` text COLLATE utf8mb4_unicode_ci,
  `logo_url` text COLLATE utf8mb4_unicode_ci,
  `login_logo_url` text COLLATE utf8mb4_unicode_ci,
  `fav_icon_url` text COLLATE utf8mb4_unicode_ci,
  `page_menu_url` text COLLATE utf8mb4_unicode_ci,
  `theme_title` text COLLATE utf8mb4_unicode_ci,
  `theme_description` text COLLATE utf8mb4_unicode_ci,
  `about_us` text COLLATE utf8mb4_unicode_ci,
  `physical_address` text COLLATE utf8mb4_unicode_ci,
  `primary_email` text COLLATE utf8mb4_unicode_ci,
  `secondary_email` text COLLATE utf8mb4_unicode_ci,
  `primary_phone` text COLLATE utf8mb4_unicode_ci,
  `secondary_phone` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `quotation` text COLLATE utf8mb4_unicode_ci,
  `quotation_origin` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `logo_url`, `login_logo_url`, `fav_icon_url`, `page_menu_url`, `theme_title`, `theme_description`, `about_us`, `physical_address`, `primary_email`, `secondary_email`, `primary_phone`, `secondary_phone`, `facebook_url`, `twitter_url`, `youtube_url`, `quotation`, `quotation_origin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'church name', 'assets/uploads/images/818495008.png', 'assets/uploads/images/952256944.jpg', 'assets/uploads/images/814724392.png', 'assets/uploads/images/130886501.jpg', 'Beyond the limit', 'God love us we are his children and are meant to be faithful to HIM.', '<h1>About the church</h1>\r\n\r\n<p>Church Online meets in every country around the world.Here&rsquo;s how we do it&mdash;and why.</p>\r\n\r\n<p>One would be to go to church with someone you know who does go. You could sit with them and they could help you by explaining what happens and so on. Perhaps they might introduce you to some others who are there.</p>\r\n\r\n<p>If you&rsquo;d rather go on your own then don&rsquo;t arrive too early, five minutes before the starting time is ok and make sure you sit near the back. That way you won&rsquo;t feel quite so exposed.</p>', 'wall down street avenue 23', 'ack@gmail.com', 'ack2@gmail.com', '0719726698', '098736355', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', 'For God so loved the world that he gave his only begotten son,that whoever believes in him should not perish but have an everlasting life.', 'John 3:16', '2017-02-24 01:27:36', '2017-07-04 08:51:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image_url`, `description`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Home', 'assets/uploads/images/310628255.jpg', 'Home', 1, '2017-07-04 11:31:49', '2017-07-04 11:31:49', NULL),
(4, 'Nature', 'assets/uploads/images/881429036.jpg', 'True nature', 1, '2017-07-04 11:23:40', '2017-07-04 11:23:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `names` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `names`, `email`, `phone`, `image_url`, `title`, `brief_description`, `facebook_url`, `twitter_url`, `youtube_url`, `priority`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Carol Mathews', 'carol@gmail.com', '0719726698', 'assets/uploads/images/370062933.jpg', 'Bishop', 'Serves the Lord Jesus Christ every breathe he takes. Its an honor to be alive and server our Everlasting father', 'http://facebook.com', 'https://twitter.com/', 'https://www.youtube.com/', 1, 1, '2017-07-04 11:08:04', '2017-07-04 11:08:04', NULL),
(3, 'Japheth Waswa', 'japhethwaswa@gmail.com', '0719726698', 'assets/uploads/images/231689453.jpg', 'Vicar', 'Serves the Lord Jesus Christ every breathe he takes. Its an honor to be alive and server our Everlasting father', 'http://facebook.com', 'https://twitter.com/', 'https://www.youtube.com/', 1, 1, '2017-07-04 11:03:40', '2017-07-04 11:04:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sunday_pages`
--

CREATE TABLE `sunday_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci,
  `sunday_schedule_id` int(11) DEFAULT NULL,
  `page_order` int(11) DEFAULT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sunday_schedules`
--

CREATE TABLE `sunday_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_title` text COLLATE utf8mb4_unicode_ci,
  `theme_description` text COLLATE utf8mb4_unicode_ci,
  `sunday_date` timestamp NULL DEFAULT NULL,
  `column_count` tinyint(4) NOT NULL DEFAULT '6',
  `visible` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocked` tinyint(4) NOT NULL DEFAULT '0',
  `role` tinyint(4) DEFAULT '2',
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `blocked`, `role`, `image_url`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$n6e70KZXcF9Ug0hqOcG7reJtY7Z.LJq3KGX0Viwjbl.PAVHAf.CSW', 0, 1, 'assets/uploads/images/213161892.jpeg', 'L2EDbddaP6Ub63VdKKglKPXXTe8sLlRFGWRzdOE2vTomnBjdjAvw6aeTvyYu', '2017-02-16 07:01:14', '2017-02-27 06:58:06'),
(2, 'jean', 'jeany@gmail.com', '$2y$10$.LSR16PSZnLpmqKYjKe1ROY3x7DwgF4xWgc4ajSZblSTt9QpIlsYi', 0, 2, NULL, 'ikqwsYJ7Txg8AdjyOg6USe4hy3QvWfAu1LcbkUPpiFbPPdjOzUJjiVzUHO1q', '2017-02-24 00:35:39', '2017-02-24 06:12:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `congregations`
--
ALTER TABLE `congregations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registers`
--
ALTER TABLE `event_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunday_pages`
--
ALTER TABLE `sunday_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sunday_schedules`
--
ALTER TABLE `sunday_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `congregations`
--
ALTER TABLE `congregations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event_registers`
--
ALTER TABLE `event_registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sunday_pages`
--
ALTER TABLE `sunday_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sunday_schedules`
--
ALTER TABLE `sunday_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
