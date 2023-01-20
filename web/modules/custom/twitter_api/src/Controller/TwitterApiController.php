<?php

namespace Drupal\twitter_api\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Controller\ControllerBase;

class TwitterApiController extends ControllerBase {

  /**
   * Endpoint for retrieving a list of tweets.
   *
   * @param Request $request
   *   The current request.
   *
   * @return JsonResponse
   *   The JSON response.
   */
  public function getTweets(Request $request) {
    // Get the twitter username from the request.
    $username = $request->query->get('username');

    // Use the twitter service to retrieve tweets.
    $tweets = \Drupal::service('twitter_api.client')->getTweets($username);

    // Create a JSON response with the tweets.
    $response = new JsonResponse($tweets);

    return $response;
  }

  /**
   * Endpoint for posting a tweet.
   *
   * @param Request $request
   *   The current request.
   *
   * @return JsonResponse
   *   The JSON response.
   */
  public function postTweet(Request $request) {
    // Get the tweet text from the request.
    $tweet = $request->request->get('tweet');

    // Use the twitter service to post the tweet.
    $result = \Drupal::service('twitter_api.client')->postTweet($tweet);

    // Create a JSON response with the result.
    $response = new JsonResponse($result);

    return $response;
  }

}