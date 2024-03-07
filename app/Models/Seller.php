<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Notifications\SellerEmailVerificationNotification;
use App\Notifications\SellerResetPasswordNotification as Notification;
use Illuminate\Support\Facades\Mail;
use DB;
class Seller extends Authenticatable
{
    use HasFactory;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
      protected $table = 'sellers';

    protected $guard = 'seller';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'status',
        'avatar',
        'address1',
        'address2',
        'city',
        'country',
        'state',
        'zipcode',
        'convert_estimate',
        'is_deleted',
        'parent_id',
        'stored_permissions'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Custom password reset notification.
     * 
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        // $this->notify(new Notification($token.$this->email));

        $data = [
            $this->email
        ];

        Mail::send('mails.seller_forgot_password_email', [
            // 'fullname'      => $this->fullname,
            'reset_url'     => route('seller.password.reset', ['token' => $token, 'email' => $this->email]),
        ], function($message) use($data){
            $message->subject('Reset Password Request');
            $message->to($data[0]);
        });
    }

    /**
     * Send email verification notice.
     * 
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new SellerEmailVerificationNotification);
    }
    
    public static function getOffers(){
        //service_id
        return	$sales = DB::table('offers')
         ->join('service_categories','service_categories.id', '=', 'offers.service_id')
         ->select('offers.*','service_categories.category_name')
         ->get();
    }
}
