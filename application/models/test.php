<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Post_model extends CI_Model
{
    
        public function list_of_all(){
            $query = "SELECT posts.*, user.first_name, user.last_name
             FROM `posts`
              left join `user`
               on `posts`.user_id = `user`.id ";

               
            return $this->db->query($query)->result_array();

            
            
            //$this->db->query($sql,);
        }

        public function add_post($new_post)
        {

                
                $query = "INSERT INTO posts
                (post, created_at, updated_at,user_id)
                VALUES (?,?,?,?)";
        
                   
         return $this->db->query($query, $new_post);    
        }

        public function add_comment($new_comment){

            $query = "INSERT INTO comments
                (comment, created_at, updated_at, user_id, posts_id)
                VALUES (?,?,?,?,?)";
                
           return $this->db->query($query, $new_comment);
        }
        
        public function list_of_all_comments(){
            $query = "SELECT *
                            FROM comments
                            INNER JOIN user
                            on comments.user_id = user.id
                            ";

               
            return $this->db->query($query)->result_array();

            
            
            //$this->db->query($sql,);
        }


        // SELECT *
        //                     FROM comments
        //                     INNER JOIN user
  //                           on comments.user_id = user.id
        //                     INNER JOIN posts
  //                               on comments.posts_id = posts.id
}