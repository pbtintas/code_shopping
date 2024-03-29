<?php

use CodeShopping\Models\User;
use CodeShopping\Models\UserPhoto;
use CodeShopping\Models\UserProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class UsersTableSeeder extends Seeder
{
    private $allFakerPhotos;
    private $fakerPhotosPath = 'app/faker/users_customers';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)
            ->create([
                'name' => 'Walter Silva',
                'email' => 'admin@user.com'
            ]);
        factory(User::class, 50)
            ->create();
    }
}

//    public function run()
//    {
//        $this->allFakerPhotos = $this->getFakerPhotos();
//        $this->deleteAllPhotosInUsersPath();
//        $self = $this;
//        \File::deleteDirectory(UserProfile::photosPath(), true);
//        factory(User::class, 1)
//            ->create([
//                'email' => 'admin@user.com'
//            ])
//            ->each(function (User $user) use($self) {
//                $self->createPhotoDir($user);
//                $self->createPhotosModels($user);
//                User::reguard();
//                $user->updateWithProfile([
//                    'phone_number' => '+16505551234',
//                    'photo' => $this->getAdminPhoto()
//                ]);
//                //User::unguard();
//                //$user->profile->firebase_uid = '31Fo1m3XqBMAF2R3kwGRUPGLeG93';
//                //$user->profile->save();
//            });
//
//        factory(User::class, 1)
//            ->create([
//                'email' => 'customer@user.com',
//                'role' => User::ROLE_CUSTOMER
//            ])
//            ->each(function (User $user) {
//                User::reguard();
//                $user->updateWithProfile([
//                    'phone_number' => '+16505551235',
//                    'photo' => $this->getSomeCustomersPhoto()
//                ]);
//              //  User::unguard();
//              //  $user->profile->firebase_uid = 'AeyPzyCcJxhzeMLBRKmSUOVrnvw1';
//              //  $user->profile->save();
//            });
//
//        factory(User::class, 20)
//            ->create([
//                'role' => User::ROLE_CUSTOMER,
//            ])
//            ->each(function (User $user, $key) {
//                User::reguard();
//                $user->updateWithProfile([
//                $user->profile->phone_number = "+165055510{$key}",
//                $user->profile->firebase_uid = "user-{$key}",
//                $user->profile->photo = $this->getSomeCustomersPhoto(),
//                ]);
//               // User::unguard();
//             //   $user->profile->save();
//            });
//    }
//

//    public function getAdminPhoto()
//    {
//        return new \Illuminate\Http\UploadedFile(
//            storage_path('app/faker/users_admin/trump.jpg'),
//            str_random(16) . '.jpg'
//        );
//    }
//
//    public function getCustomerPhoto()
//    {
//        return new \Illuminate\Http\UploadedFile(
//            storage_path('app/faker/users_customers/bruce.jpg'),
//            str_random(16) . '.jpg'
//        );
//    }
//
//    public function getSomeCustomersPhoto()
//    {
//        /** @var SplFileInfo $photoFile */
//        $photoFile = $this->allFakerPhotos->random();
//        if(!$photoFile){
//            return new \Illuminate\Http\UploadedFile(
//                storage_path($this->$photoFile),
//                str_random(16) . '.' . $photoFile->getExtension()
//            );
//        }
//    }
//
//    private function getFakerPhotos(): Collection
//    {
//        $path = (storage_path($this->fakerPhotosPath));
//        return collect(\File::allFiles($path));
//    }
//
//    private function deleteAllPhotosInUsersPath()
//    {
//        $path = UserPhoto::USERS_PATH;
//        \File::deleteDirectory(storage_path($path), true);
//    }
//
//    private function createPhotoDir(User $user)
//    {
//        $path = UserPhoto::photosPath($user->id);
//        \File::makeDirectory($path, 0777, true);
//    }
//
//    private function createPhotosModels(User $user)
//    {
//        foreach (range(1, 5) as $v) {
//            $this->createPhotoModel($user);
//        }
//    }
//
//    private function createPhotoModel(User $userPhoto)
//    {
//        $photo = UserPhoto::create([
//            'user_id' => $userPhoto->id,
//            'file_name' => 'image.jpg'
//        ]);
//        $this->generatePhoto($photo);
//    }
//
//    private function generatePhoto(UserPhoto $photo)
//    {
//        $photo->file_name = $this->uploadPhoto($photo->user_id);
//        $photo->save();
//    }
//
//    private function uploadPhoto($userPhotoId): string
//    {
//        /** @var SplFileInfo $photoFile */
//        $photoFile = $this->allFakerPhotos->random();
//        $uploadFile = new \Illuminate\Http\UploadedFile(
//            $photoFile->getRealPath(),
//            str_random(16) . '.' . $photoFile->getExtension()
//        );
//        UserPhoto::uploadFiles($userPhotoId, [$uploadFile]);
//        //Upload da Foto
//        return $uploadFile->hashName();
//    }
//
//}
